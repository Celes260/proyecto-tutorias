<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use app\Models\User;

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
        $alumnos = User::orderBy('id','desc')->paginate(5);

        if($user->rol != "admin"){

            return view('home',[
                'user' => $user
             
            ]);
        }else{
            return view('user.panel',[
                'user' => $user,
                'alumnos' => $alumnos
            ]);
        }

       
    }

    public function login(){
        return view ('auth.login');
    }
}
