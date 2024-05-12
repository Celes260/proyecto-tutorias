

<div class="container-funcion col-md-10 bx-panel" id="bx-alumn">

  <p class="p-al">Buscar alumno por nombre o numero de control</p>

  
  <form method="get" action="{{ route('buscarAlumno', ['Ingeniería en Sistemas Computacionales']) }}" id="formAlumnos" class="col-md-8 formAdmAl">
    <input type="text" placeholder="Ingrese nombre o numero de control" class="form-control " name="search">
    <input type="submit" class="btn btn-primary" value="Buscar">
  </form>

  <div class="bx-filtro">
    <div class="bx-filtro-lb">
      <p class="p-al">Seleccionar por carrera</p>
    </div>

    <div class="bx-filtro-lb">
      <p class="p-al">Seleccionar por grupo</p>
    </div>
  </div>



  <div class="bx-filtro">

    <form action=" " class="col-md-5 formAdmAl" id="formAdmAl">
      <select id="select-carrera" name="carrera" class="form-select col-m inp-gp" aria-label="Default select example">
              <option value="">Elige una carrera</option>
              <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
              <option class="op-carrera" value="Ingeniería en innovación Agrícola">Ingeniería en innovacion Agricola</option>
              <option class="op-carrera" value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
              <option class="op-carrera" value="Ingeniería en Industrias Administración">Ingeniería en Administracion</option>
              <option class="op-carrera" value="Ingeniería en Mecantrónica">Ingeniería en Mecantrónica</option>
      </select>
    </form>


    <form action="" class="col-md-5 formAdmAl">
      
      <select id="select-grupo" class="form-select col-m inp-gp" aria-label="Default select example">
        <option value="">Selecctionar grupo</option>
        @foreach($grupos as $grupo)
          <option value="{{$grupo->id}}">{{$grupo->grupo}}</option>


        @endforeach
      
      </select>
    </form>

  </div>
  

  <div class="bx-tableContainer">

    <table class="table bx-table">
      <thead>
        <tr>
          <th scope="col">No.de control</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido paterno</th>
          <th scope="col">Apellido materno</th>
          <th scope="col">Carrera</th>
          <th scope="col">Grupo</th>
          <th scope="col">Tutor</th>
          <th scope="col">Evaluacion</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>

        @foreach($alumnos as $alumno)
        <tr>
          <th scope="row">{{$alumno->numeroControl}}</th>
          <td><a href="{{route('viewUpdate',[$id=$alumno->id])}}">{{$alumno->name}} </a></td>
          <td>{{$alumno->apellidoPaterno}}</td>
          <td>{{$alumno->apellidoMaterno}}</td>
          <td>{{$alumno->carrera}}</td>
          <td>{{$alumno->grupo->grupo}}</td>
          <td><a href="">{{$alumno->grupo->tutor->nombre}} {{$alumno->grupo->tutor->apellidoPaterno}}</a></td>
          <td></td>
          <td>{{$alumno->contra}}</td>
          <td>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$alumno->id}}">
            Eliminar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$alumno->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$alumno->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{$alumno->id}}">Borrar alumno</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro que deseas borrar a {{$alumno->name}} {{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}} ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="{{route('eliminarAlumno',[$alumno->id])}}" class="btn btn-danger">Borrar</a>
                    </div>
                </div>
            </div>
        </div>

          </td>
        </tr>
        @endforeach
       

      </tbody>
    </table>
  </div>
 


</div>
