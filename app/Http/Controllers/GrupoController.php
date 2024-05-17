<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;
use App\Models\tutor;

class GrupoController extends Controller{

    public function viewAgregarGrupo(){
        $tutores=tutor::orderBy('nombre', 'asc')->get();

        $include= "agregarGrupo";
        return view('user.panel',[
            'include'=>$include,
            'tutores'=>$tutores
           
        ]); 

    }

    public function agregarGrupo(Request $request){
         $validate = $this->validate($request,[
             'grupo' => ['required', 'string', 'max:255', 'unique:grupos'],
            'tutor_id' => ['required', 'max:255', 'unique:grupos'],
            'semestre' => ['required', 'max:255']
        
         ]);

       
        $grupo = new grupo();
        $grupo->grupo=$request->input('grupo');
        $grupo->tutor_id=$request->input('tutor_id');
        $grupo->carrera=$request->input('carrera');
        $grupo->semestre=$request->input('semestre');
        $grupo->save();
        return redirect()->action([GrupoController::class, 'viewAgregarGrupo'])->with('message', 'Usuario actualizado');




    }
   
}
