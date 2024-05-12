<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\grupo;
use App\Models\User;

class UserController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function mostrarAlumnos($carreraa, $grupoo=null){
        $user = Auth::user();
        $carrera = $carreraa;
        $group = $grupoo;
        $alumnos ="";

        if($group==null){
            $alumnos = User::all()->where('carrera', $carrera);
        }else{

            $alumnos = User::all()->where('carrera', $carrera)->where('grupo_id',$group);
        }

        $grupo = grupo::all()->where('carrera',$carrera);

        if($user->rol != "admin"){

            return view('home',[
                'user' => $user
                
            ]);
        }else{
           $include= "alumnos";
            return view('user.panel',[
                'user' => $user,
                'alumnos' => $alumnos,
                'include'=>$include,
                'grupos'=>$grupo,
                'carrera'=>$carrera
            ]);
        }
    }

    public function buscarAlumno(Request $request, $carreraa){
        $carrera = $carreraa;
        $user = Auth::user();
        $search = $request->input('search');

        $grupo = grupo::all()->where('carrera',$carrera);
        $alumno = User::where('numeroControl', 'LIKE', '%'.$search.'%')->orWhere('name', 'LIKE', '%'.$search.'%')->orderBy('id','desc')->get();



        $include= "alumnos";
            return view('user.panel',[
                'user' => $user,
                'alumnos' => $alumno,
                'include'=>$include,
                'grupos'=>$grupo,
                'carrera'=>$carrera
            ]);


    }

    public function viewNuevoAlumno(){
        $user = Auth::user();
        $grupo = grupo::all();
        $include="agregarAlumno";
        return view('user.panel',[
            'user' => $user,
            'include'=>$include,
            'grupos'=>$grupo
        ]);

    }

    public function guardarAlumno(Request $request){
      
        $validate = $this->validate($request,[
            'nombre' => ['required', 'string', 'max:255'],
            'apellidoPaterno' => ['required', 'string', 'max:255'],
            'apellidoMaterno' => ['required', 'string', 'max:255'],
            'numeroControl' => ['required', 'max:255', 'unique:users,numeroControl'],
            'carrera' => ['required', 'string'],
            'semestre' => ['required'],
            'grupo' => ['required']
        

        ]);
        $email = $request->input('numeroControl')."@itstacambaro.edu.mx";

        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $caracteresLongitud = strlen($caracteres);
        $cadenaAleatoria = '';
    
        // Generar cadena aleatoria
        for ($i = 0; $i < 8; $i++) {
            $indiceAleatorio = random_int(0, $caracteresLongitud - 1);
            $cadenaAleatoria .= $caracteres[$indiceAleatorio];
        }


        $user = new User();
        $user->name = $request->input('nombre');
        $user->apellidoPaterno = $request->input('apellidoPaterno');
        $user->apellidoMaterno = $request->input('apellidoMaterno');
        $user->numeroControl = $request->input('numeroControl');
        $user->carrera = $request->input('carrera');
        $user->semestre = $request->input('semestre');
        $user->grupo_id = $request->input('grupo');
        $user->email = $email;
        $user->contra=$cadenaAleatoria;
        $user->password = $cadenaAleatoria;
        $user->save();
        return redirect()->action([UserController::class, 'viewNuevoAlumno'])->with('message', 'alumno agregado correctamente');
    }

    public function viewActualizarAlumno($carreraa, $grupoo=null){
        $user = Auth::user();
        $user = Auth::user();
        $carrera = $carreraa;
        $group = $grupoo;
        $alumnos ="";

        if($group==null){
            $alumnos = User::all()->where('carrera', $carrera);
        }else{

            $alumnos = User::all()->where('carrera', $carrera)->where('grupo_id',$group);
        }

        $grupo = grupo::all()->where('carrera',$carrera);
      
    
        $include= "updateAlumno";
       
        return view('user.panel',[
            'user' => $user,
            'alumnos' => $alumnos,
            'include'=>$include,
            'grupos'=>$grupo,
            'carrera'=>$carrera
        ]);

    }

    public function vistaUpdate($id){
        $user = Auth::user();
        $alumno = User::find($id);
        $grupo = grupo::all();
        $include= "actualizarAlumno";
       
        return view('user.panel',[
            'user' => $user,
            'include'=>$include,
            'alumno'=>$alumno,
            'grupos'=>$grupo
        ]);

    }

    public function actualizandoAlumno(Request $request, $id){
        
      
        $validate = $this->validate($request,[
            'nombre' => ['required', 'string', 'max:255'],
            'apellidoPaterno' => ['required', 'string', 'max:255'],
            'apellidoMaterno' => ['required', 'string', 'max:255'],
            'numeroControl' => ['required', 'max:255', 'unique:users,numeroControl,'.$id],
            'carrera' => ['required', 'string'],
            'semestre' => ['required'],
            'grupo' => ['required']

            
        

        ]);
        echo "<script> alert('Alumno actualizado con exito'); </script>";
       
        $email = $request->input('numeroControl')."@itstacambaro.edu.mx";
        $user = User::find($id);
        $user->name = $request->input('nombre');
        $user->apellidoPaterno = $request->input('apellidoPaterno');
        $user->apellidoMaterno = $request->input('apellidoMaterno');
        $user->numeroControl = $request->input('numeroControl');
        $user->carrera = $request->input('carrera');
        $user->semestre = $request->input('semestre');
        $user->email = $email;

        $user->grupo_id = $request->input('grupo');
       
        $user->update();
        
        return redirect()->action([HomeController::class, 'index'])->with('message', 'Usuario actualizado correctamente');
        
        

    }

    public function vistaEliminarAlumno(){
        $user = Auth::user();
        $alumno = User::all();
      
        $include= "vistaEliminarAlumno";
       
        return view('user.panel',[
            'user' => $user,
            'include'=>$include,
            'alumnos'=>$alumno
       
        ]);

        

    }

    public function eliminarAlumno($id){
        $user= User::find($id);

        if (!$user) {
            return redirect()->action([UserController::class, 'vistaEliminarAlumno'])->with('message', 'Usuario no encontrado');
        }
        $user->delete();
        return redirect()->action([HomeController::class, 'index'])->with('message', 'Alumno eliminado correctamente');

    }
    
}
