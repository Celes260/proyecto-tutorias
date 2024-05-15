<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tutor;
use App\Models\grupo;

use function PHPUnit\Framework\isEmpty;

class TutorController extends Controller{

    public function viewAgregarTutor(){

        $include= "agregarTutor";
       
        return view('user.panel',[
            'include'=>$include  
       
        ]);

    }

    public function guardarTutor(Request $request){
        $tutor = new tutor();
        
        $nombre = $request->input('nombre');
        $apellidoPaterno = $request->input('apellidoPaterno');
        $apellidoMaterno = $request->input('apellidoMaterno');
        $numeroControl = $request->input('numeroControl');

        $tutor->nombre = $nombre;
        $tutor->apellidoPaterno = $apellidoPaterno;
        $tutor->apellidoMaterno = $apellidoMaterno;
        $tutor->numeroControl = $numeroControl;
        $tutor->save();

        return redirect()->action([TutorController::class, 'viewAgregarTutor'])->with('message', 'Tutor agregado correctamente');

    }

    public function viewMostrarTutores($carreraa){
        $carrera = $carreraa;
        $grupos = grupo::all()->where('carrera', $carrera);

        $include= "tutores";
       
        return view('user.panel',[
            'include'=>$include,
            'grupos' => $grupos  
       
        ]);                                                                                                                                                     

    }

    public function buscarTutor(Request $request){

        $validate = $this->validate($request,[
          
            'search' => ['required', 'max:255'],
           

        ]);
      
        $search = $request->input('search');
        $grupos ="";
        $tutor = Tutor::where('numeroControl', 'LIKE', '%'.$search.'%')->orWhere('nombre', 'LIKE', '%'.$search.'%')->orderBy('id','desc')->first();
     
        if($tutor==""){
            $grupos=grupo::all();
            echo "<script> alert('Tutor no encontrado');  </script>";
        }else{

            $grupos = grupo::all()->where('tutor_id', $tutor->id);
        }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        $include= "tutores";
        return view('user.panel',[
            'include'=>$include,
            'grupos'=>$grupos
            
       
        ]);  

    }

    public function eliminarTutor($id){
        $tutor= tutor::find($id);

        if (!$tutor) {
            return redirect()->action([UserController::class, 'vistaEliminarAlumno'])->with('message', 'Usuario no encontrado');
        }
        $tutor->delete();
        return redirect()->action([HomeController::class, 'index'])->with('message', 'Alumno eliminado correctamente');

    }
    public function viewUpdateTutor(){
        
    }
    
}
