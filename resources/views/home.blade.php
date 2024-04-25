@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido a la evaluacion de tutorias') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   

                    {{ __('Da clic en el siguiente boton para empezar a evaluar al tutor ')." ".$user->grupo->tutor->nombre." ".
                        $user->grupo->tutor->apellidoPaterno.$user->grupo->tutor->apellidoMaterno  }} 
                    <a href="{{route ('preguntas')}}" class="btn btn-success">Comenzar a evaluar </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
