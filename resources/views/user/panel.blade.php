@extends('layouts.app')

@section('content')
<div class="" id="container-admin">
    <aside id="sidebar">
        <ul>
            <li><a href="">Alumnos</a></li>
            <li><a href="">Tutores</a></li>
            <li><a href="">Preguntas</a></li>
            <li><a href="">Iniciar evaluacion</a></li>

        </ul>
    </aside>

    @include('user.alumnos')
   
   

</div>
@endsection
