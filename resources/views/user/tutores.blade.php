

<div class="container-funcion col-md-10 bx-panel" id="bx-alumn">

  <p class="p-al">Buscar alumno por nombre o numero de control</p>

  
  <form method="get" action="{{ route('buscarTutor') }}" id="formAlumnos" class="col-md-8 formAdmAl">
    <input type="text" placeholder="Ingrese nombre o numero de control" class="form-control " name="search" required>
    
    <input type="submit" class="btn btn-primary" value="Buscar">
  </form>
  

  <div class="bx-filtro">
    <div class="bx-filtro-lb">
      <p class="p-al">Seleccionar por carrera</p>
    </div>

    
  </div>



  <div class="bx-filtro">

    <form method="post" action=" " class="col-md-5 formAdmAl" id="formAdmAl">
      <select id="select-carrera-tutores" name="carrera" class="form-select col-m inp-gp" aria-label="Default select example">
              <option value="">Elige una carrera</option>
              <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
              <option class="op-carrera" value="Ingeniería en innovación Agrícola">Ingeniería en innovacion Agricola</option>
              <option class="op-carrera" value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
              <option class="op-carrera" value="Ingeniería en Industrias Administración">Ingeniería en Administracion</option>
              <option class="op-carrera" value="Ingeniería en Mecantrónica">Ingeniería en Mecantrónica</option>
      </select>
    </form>
    <select name="" class="hidden" id="select-carrera"></select>
    <select name="" class="hidden" id="select-grupo"></select>


    

  </div>
  

  <div class="bx-tableContainer">

    <table class="table bx-table">
      <thead>
        <tr>
          <th scope="col">No.de control</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido paterno</th>
          <th scope="col">Apellido materno</th>
          <th scope="col">Grupo</th>
          
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>

        @foreach($grupos as $alumno)
        <tr>
          <th scope="row">{{$alumno->tutor->numeroControl}}</th>
          <td><a href="{{route('viewUpdate',[$id=$alumno->tutor->id])}}">{{$alumno->tutor->nombre}} </a></td>
          <td>{{$alumno->tutor->apellidoPaterno}}</td>
          <td>{{$alumno->tutor->apellidoMaterno}}</td>
          <td>{{$alumno->grupo}}</td>
          
          
          <td>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$alumno->tutor->id}}">
            Eliminar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$alumno->tutor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$alumno->tutor->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{$alumno->tutor->id}}">Borrar alumno</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro que deseas borrar a {{$alumno->tutor->nombre}} {{$alumno->tutor->apellidoPaterno}} {{$alumno->tutor->apellidoMaterno}} ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="{{route('eliminarTutor',[$alumno->tutor->id])}}" class="btn btn-danger">Borrar</a>
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
