<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\grupo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $user = Auth::user();
        $alumnos = User::all()->where('carrera','Ingeniería en Sistemas Computacionales');
        $grupo = grupo::all();

        if($user->rol != "admin"){

            return view('home',[
                'user' => $user
             
            ]);
        }else{
           $include= "inicio";
            return view('user.panel',[
                'user' => $user,
                'include'=>$include,
               
            ]);
        }

       
    }
    
    public function login(){
        return view ('auth.login');
    }

 
}
