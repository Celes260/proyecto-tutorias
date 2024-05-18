<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class PreguntaController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function preguntas(){
        $user = Auth::user();
        $verificar = pregunta::where('user_id', $user->id)->get();

        if(count($verificar)==1){
           return view('preguntas.realizado');
        }else{
            return view('preguntas.preguntas');
        }

      



    }

    public function guardarPreguntas(Request $request){
        $user = Auth::user();
        $verificar = pregunta::where('user_id', $user->id)->get();

        if(count($verificar)==1){
           return view('preguntas.realizado');
           die();   
        }

      

        $indicadorA = $request->input('indicadorA');
        $indicadorB = $request->input('indicadorB');
        $indicadorC = $request->input('indicadorC');
        $indicadorD = $request->input('indicadorD');
        $comentarios = $request->input('comentarios');

        $pregunta = new pregunta();
    

        $pregunta->user_id = $user->id;
        $pregunta->tutor_id = $user->grupo->tutor->id;
        $pregunta->indicadorA = $indicadorA;
        $pregunta->indicadorB = $indicadorB;
        $pregunta->indicadorC = $indicadorC;
        $pregunta->indicadorD = $indicadorD;
        $pregunta->comentarios = $comentarios;
        $pregunta->estado = "realizada";
        $pregunta->save();
       

        $user->estadoEvaluacion = "realizada";
        $user->update();
        return view('preguntas.realizado');
      





    }


}
