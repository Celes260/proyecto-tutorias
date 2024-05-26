<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $pregunta->carrera = $user->carrera;
        $pregunta->save();
       

        $user->estadoEvaluacion = "realizada";
        $user->update();
        return view('preguntas.realizado');
      

    }

    public function evaluacion(){

        $include= "evaluacion";
        return view('user.panel',[
            'include'=>$include
         
        ]);  

    }
    public function reporteCarrera(Request $request){
        $id = $request->input('tutor');
        $carrera = $request->input('carrera');
        $resultA = Pregunta::where('carrera', $carrera)
        ->select(DB::raw('COUNT(DISTINCT user_id) as cantidad_alumnos'))
        ->first();

        $cantidad=$resultA->cantidad_alumnos;
        echo $cantidad;
        

        $image = $request->input('g-1'); 
        $A5 = pregunta::where('carrera',$carrera)->where('indicadorA', 5)->count();
        $A4 = pregunta::where('carrera',$carrera)->where('indicadorA', 4)->count();
        $A3 = pregunta::where('carrera',$carrera)->where('indicadorA', 3)->count();
        $A2 = pregunta::where('carrera',$carrera)->where('indicadorA', 2)->count();
        $A1 = pregunta::where('carrera',$carrera)->where('indicadorA', 1)->count();
        $promA5 = (5/$cantidad)*$A5;
        $promA4 = (4/$cantidad)*$A4;
        $promA3 = (3/$cantidad)*$A3;
        $promA2 = (2/$cantidad)*$A2;
        $promA1 = (1/$cantidad)*$A1;
        $promedioA=$promA1+$promA2+$promA3+$promA4+$promA5;

        $image2 = $request->input('g-2');
        $B5 = pregunta::where('carrera',$carrera)->where('indicadorB', 5)->count();
        $B4 = pregunta::where('carrera',$carrera)->where('indicadorB', 4)->count();
        $B3 = pregunta::where('carrera',$carrera)->where('indicadorB', 3)->count();
        $B2 = pregunta::where('carrera',$carrera)->where('indicadorB', 2)->count();
        $B1 = pregunta::where('carrera',$carrera)->where('indicadorB', 1)->count();

        $promB5 = (5/$cantidad)*$B5;
        $promB4 = (4/$cantidad)*$B4;
        $promB3 = (3/$cantidad)*$B3;
        $promB2 = (2/$cantidad)*$B2;
        $promB1 = (1/$cantidad)*$B1;
        $promedioB=$promB1+$promB2+$promB3+$promB4+$promB5;

        $image3 = $request->input('g-3');
        $C5 = pregunta::where('carrera',$carrera)->where('indicadorC', 5)->count();
        $C4 = pregunta::where('carrera',$carrera)->where('indicadorC', 4)->count();
        $C3 = pregunta::where('carrera',$carrera)->where('indicadorC', 3)->count();
        $C2 = pregunta::where('carrera',$carrera)->where('indicadorC', 2)->count();
        $C1 = pregunta::where('carrera',$carrera)->where('indicadorC', 1)->count();
        $promC5 = (5/$cantidad)*$C5;
        $promC4 = (4/$cantidad)*$C4;
        $promC3 = (3/$cantidad)*$C3;
        $promC2 = (2/$cantidad)*$C2;
        $promC1 = (1/$cantidad)*$C1;
        $promedioC=$promC1+$promC2+$promC3+$promC4+$promC5;

        $image4 = $request->input('g-4');
        $D5 = pregunta::where('carrera',$carrera)->where('indicadorD', 5)->count();
        $D4 = pregunta::where('carrera',$carrera)->where('indicadorD', 4)->count();
        $D3 = pregunta::where('carrera',$carrera)->where('indicadorD', 3)->count();
        $D2 = pregunta::where('carrera',$carrera)->where('indicadorD', 2)->count();
        $D1 = pregunta::where('carrera',$carrera)->where('indicadorD', 1)->count();
        $promD5 = (5/$cantidad)*$D5;
        $promD4 = (4/$cantidad)*$D4;
        $promD3 = (3/$cantidad)*$D3;
        $promD2 = (2/$cantidad)*$D2;
        $promD1 = (1/$cantidad)*$D1;
        $promedioD=$promD1+$promD2+$promD3+$promD4+$promD5;

        $promedioGeneral = ($promedioA+$promedioB+$promedioC+$promedioD)/4;


       
        $pdf = Pdf::loadView('user.reporteCarrera', compact('image','image2','image3','image4','A5','A4','A3','A2','A1',
        'B5','B4','B3','B2','B1', 'C5','C4','C3','C2','C1','D5','D4','D3','D2','D1',
        'promedioA','promedioB','promedioC','promedioD','promedioGeneral'));
        return $pdf->stream();
    }


}
