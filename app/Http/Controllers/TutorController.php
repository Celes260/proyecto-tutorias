<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tutor;
use App\Models\grupo;
use App\Models\pregunta;

use function PHPUnit\Framework\isEmpty;

class TutorController extends Controller{

    public function viewAgregarTutor(){

        $include= "agregarTutor";
       
        return view('user.panel',[
            'include'=>$include  
       
        ]);

    }

    public function guardarTutor(Request $request){
        $validate = $this->validate($request,[
            'nombre' => ['required', 'string', 'max:255'],
            'apellidoPaterno' => ['required', 'string', 'max:255'],
            'apellidoMaterno' => ['required', 'string', 'max:255'],
            'numeroControl' => ['required', 'max:255', 'unique:tutores']
        
        ]);

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

    public function viewMostrarTutores($carreraa = "Ingeniería en Sistemas Computacionales"){
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
    public function viewUpdateTutor($id){
        $tutor = tutor::find($id);

        $include= "actualizarTutor";
        return view('user.panel',[
            'include'=>$include,
            'tutor'=>$tutor
            
       
        ]);  

    }

    public function actualizarTutor(Request $request, $id){
        $validate = $this->validate($request,[
            'nombre' => ['required', 'string', 'max:255'],
            'apellidoPaterno' => ['required', 'string', 'max:255'],
            'apellidoMaterno' => ['required', 'string', 'max:255'],
            'numeroControl' => ['required', 'max:255', 'unique:users,numeroControl,'.$id]
            

        ]);

        $tutor = tutor::find($id);
        
        $tutor->nombre=$request->input('nombre');    
        $tutor->apellidoPaterno=$request->input('apellidoPaterno');    
        $tutor->apellidoMaterno=$request->input('apellidoMaterno');    
        $tutor->numeroControl=$request->input('numeroControl'); 
        
        $tutor->update();

        return redirect()->route('mostrarAlumnos',['Ingeniería en Sistemas Computacionales']);

    }

    public function verEvaluacion(){
        $include= "vistaEvaluacion";

        $A5 = pregunta::where('tutor_id',10)->where('indicadorA', 5)->count();
        $A4 = pregunta::where('tutor_id',10)->where('indicadorA', 4)->count();
        $A3 = pregunta::where('tutor_id',10)->where('indicadorA', 3)->count();
        $A2 = pregunta::where('tutor_id',10)->where('indicadorA', 2)->count();
        $A1 = pregunta::where('tutor_id',10)->where('indicadorA', 1)->count();

        return view('user.panel',[
            'include'=>$include,
            'A5'=>$A5,
            'A4'=>$A4,
            'A3'=>$A3,
            'A2'=>$A2,
            'A1'=>$A1,
            
            
       
        ]);  

    }

    

    
    
}
