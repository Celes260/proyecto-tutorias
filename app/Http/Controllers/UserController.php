<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\grupo;


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

    public function guardarAlumno(){



    }
    
}
