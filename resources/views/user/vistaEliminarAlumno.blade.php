

<div class="container-funcion col-md-10 bx-panel" id="bx-alumn">

<div class="bx-message">
  <p class="p-al">Buscar alumno por nombre o numero de control</p>
  @include('layouts.message')
</div>
  <form action="" id="formAlumnos" class="col-md-8 formAdmAl">
    <input type="text" placeholder="Ingrese nombre o numero de control" class="form-control ">
    <input type="submit" class="btn btn-primary" value="Buscar">
  </form>

  <p class="p-al">Seleccionar por grupo</p>

  <form  action="" class="col-md-5 formAdmAl">

    <select class="form-select col-m inp-gp" aria-label="Default select example">
      <option selected>Selecciona el grupo</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </form>

  <div class="bx-table">

    <table class="table bx-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th></th>
          
        </tr>
      </thead>
      <tbody>

      @foreach($alumnos as $alumno)
<tr>
    <th scope="row">{{$alumno->numeroControl}}</th>
    <td>{{$alumno->name}} {{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}}</td>
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
