@extends('layouts.app')

@section('content')
<div class="" id="container-admin">
<div class="wrapper " id="wrap-side">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                
            </div>
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-user"></i>
                        <span>Alumnos</span>
                    </a>

                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Ver alumnos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Agregar alumno</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Eliminar alumno</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-users"></i>
                        <span>Grupos</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link " >
                                Añadir grupo
                            </a>
                           
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#tutor" aria-expanded="false" aria-controls="tutor">
                        <i class="lni lni-user"></i>
                        <span>Tutores</span>
                    </a>
                    
                    <ul id="tutor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Ver tutores</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Agregar tutor</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Eliminar tutor</a>
                        </li>
                    </ul>
                </li>
                
              
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Evaluacion</span>
                    </a>
                </li>

                <!-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li> -->
            </ul>
            
        </aside>
       
    </div>

    @include('user.alumnos')
   
   
   

</div>
@endsection
