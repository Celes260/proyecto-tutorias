<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tutor;
use App\Models\grupo;
use App\Models\pregunta;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function verEvaluacion($id){
        $include= "vistaEvaluacion";

        $A5 = pregunta::where('tutor_id',$id)->where('indicadorA', 5)->count();
        $A4 = pregunta::where('tutor_id',$id)->where('indicadorA', 4)->count();
        $A3 = pregunta::where('tutor_id',$id)->where('indicadorA', 3)->count();
        $A2 = pregunta::where('tutor_id',$id)->where('indicadorA', 2)->count();
        $A1 = pregunta::where('tutor_id',$id)->where('indicadorA', 1)->count();

        $B5 = pregunta::where('tutor_id',$id)->where('indicadorB', 5)->count();
        $B4 = pregunta::where('tutor_id',$id)->where('indicadorB', 4)->count();
        $B3 = pregunta::where('tutor_id',$id)->where('indicadorB', 3)->count();
        $B2 = pregunta::where('tutor_id',$id)->where('indicadorB', 2)->count();
        $B1 = pregunta::where('tutor_id',$id)->where('indicadorB', 1)->count();

        $C5 = pregunta::where('tutor_id',$id)->where('indicadorC', 5)->count();
        $C4 = pregunta::where('tutor_id',$id)->where('indicadorC', 4)->count();
        $C3 = pregunta::where('tutor_id',$id)->where('indicadorC', 3)->count();
        $C2 = pregunta::where('tutor_id',$id)->where('indicadorC', 2)->count();
        $C1 = pregunta::where('tutor_id',$id)->where('indicadorC', 1)->count();

        $D5 = pregunta::where('tutor_id',$id)->where('indicadorD', 5)->count();
        $D4 = pregunta::where('tutor_id',$id)->where('indicadorD', 4)->count();
        $D3 = pregunta::where('tutor_id',$id)->where('indicadorD', 3)->count();
        $D2 = pregunta::where('tutor_id',$id)->where('indicadorD', 2)->count();
        $D1 = pregunta::where('tutor_id',$id)->where('indicadorD', 1)->count();


       

        return view('user.panel',[
            'include'=>$include,
            'id_tutor' =>$id,
            'A5'=>$A5,
            'A4'=>$A4,
            'A3'=>$A3,
            'A2'=>$A2,
            'A1'=>$A1,
            'B5'=>$B5,
            'B4'=>$B4,
            'B3'=>$B3,
            'B2'=>$B2,
            'B1'=>$B1,
            'C5'=>$C5,
            'C4'=>$C4,
            'C3'=>$C3,
            'C2'=>$C2,
            'C1'=>$C1,
            'D5'=>$D5,
            'D4'=>$D4,
            'D3'=>$D3,
            'D2'=>$D2,
            'D1'=>$D1,
            
            
       
        ]);  

    }

    public function reporte(Request $request){
        $id = $request->input('tutor');
        $resultA = Pregunta::select('tutor_id', DB::raw('COUNT(DISTINCT user_id) as cantidad_alumnos'))
        ->where('tutor_id', $id)
        ->groupBy('tutor_id')
        ->first();

        $cantidad=$resultA->cantidad_alumnos;

        $image = $request->input('g-1'); 
        $A5 = pregunta::where('tutor_id',$id)->where('indicadorA', 5)->count();
        $A4 = pregunta::where('tutor_id',$id)->where('indicadorA', 4)->count();
        $A3 = pregunta::where('tutor_id',$id)->where('indicadorA', 3)->count();
        $A2 = pregunta::where('tutor_id',$id)->where('indicadorA', 2)->count();
        $A1 = pregunta::where('tutor_id',$id)->where('indicadorA', 1)->count();
        $promA5 = (5/$cantidad)*$A5;
        $promA4 = (4/$cantidad)*$A4;
        $promA3 = (3/$cantidad)*$A3;
        $promA2 = (2/$cantidad)*$A2;
        $promA1 = (1/$cantidad)*$A1;
        $promedioA=$promA1+$promA2+$promA3+$promA4+$promA5;

        $image2 = $request->input('g-2');
        $B5 = pregunta::where('tutor_id',$id)->where('indicadorB', 5)->count();
        $B4 = pregunta::where('tutor_id',$id)->where('indicadorB', 4)->count();
        $B3 = pregunta::where('tutor_id',$id)->where('indicadorB', 3)->count();
        $B2 = pregunta::where('tutor_id',$id)->where('indicadorB', 2)->count();
        $B1 = pregunta::where('tutor_id',$id)->where('indicadorB', 1)->count();

        $promB5 = (5/$cantidad)*$B5;
        $promB4 = (4/$cantidad)*$B4;
        $promB3 = (3/$cantidad)*$B3;
        $promB2 = (2/$cantidad)*$B2;
        $promB1 = (1/$cantidad)*$B1;
        $promedioB=$promB1+$promB2+$promB3+$promB4+$promB5;

        $image3 = $request->input('g-3');
        $C5 = pregunta::where('tutor_id',$id)->where('indicadorC', 5)->count();
        $C4 = pregunta::where('tutor_id',$id)->where('indicadorC', 4)->count();
        $C3 = pregunta::where('tutor_id',$id)->where('indicadorC', 3)->count();
        $C2 = pregunta::where('tutor_id',$id)->where('indicadorC', 2)->count();
        $C1 = pregunta::where('tutor_id',$id)->where('indicadorC', 1)->count();
        $promC5 = (5/$cantidad)*$C5;
        $promC4 = (4/$cantidad)*$C4;
        $promC3 = (3/$cantidad)*$C3;
        $promC2 = (2/$cantidad)*$C2;
        $promC1 = (1/$cantidad)*$C1;
        $promedioC=$promC1+$promC2+$promC3+$promC4+$promC5;

        $image4 = $request->input('g-4');
        $D5 = pregunta::where('tutor_id',$id)->where('indicadorD', 5)->count();
        $D4 = pregunta::where('tutor_id',$id)->where('indicadorD', 4)->count();
        $D3 = pregunta::where('tutor_id',$id)->where('indicadorD', 3)->count();
        $D2 = pregunta::where('tutor_id',$id)->where('indicadorD', 2)->count();
        $D1 = pregunta::where('tutor_id',$id)->where('indicadorD', 1)->count();
        $promD5 = (5/$cantidad)*$D5;
        $promD4 = (4/$cantidad)*$D4;
        $promD3 = (3/$cantidad)*$D3;
        $promD2 = (2/$cantidad)*$D2;
        $promD1 = (1/$cantidad)*$D1;
        $promedioD=$promD1+$promD2+$promD3+$promD4+$promD5;

        $promedioGeneral = ($promedioA+$promedioB+$promedioC+$promedioD)/4;


        $tutor=tutor::find($id);
        $pdf = Pdf::loadView('user.reporte', compact('image','image2','image3','image4','A5','A4','A3','A2','A1',
        'B5','B4','B3','B2','B1', 'C5','C4','C3','C2','C1','D5','D4','D3','D2','D1',
        'promedioA','promedioB','promedioC','promedioD','tutor','promedioGeneral'));
        return $pdf->stream();
    }

    public function comentarios($id){
        $id_tutor = $id;
        $comentarios = Pregunta::where('tutor_id', $id_tutor)->pluck('comentarios');
        $include= "comentarios";
        return view('user.panel',[
            'include'=>$include,
            'comentarios'=>$comentarios
            
            
       
        ]);  

    }


    
    
}
