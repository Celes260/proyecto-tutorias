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
        
        echo "<script> alert(Alumno creado con exito); </script>"; 
        $user->save();
    }

    public function viewActualizarAlumno(){
        $user = Auth::user();
      
        $alumnos = User::orderBy('id','desc')->paginate(5);
        $include= "updateAlumno";
       
        return view('user.panel',[
            'user' => $user,
            'include'=>$include,
            'alumnos'=>$alumnos
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
    
}
