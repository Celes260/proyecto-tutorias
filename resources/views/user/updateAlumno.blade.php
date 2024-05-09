

<div class="container-funcion col-md-10 bx-panel" id="bx-alumn">

  <p class="p-al">Buscar alumno por nombre o numero de control</p>
  <form action="" id="formAlumnos" class="col-md-8 formAdmAl">
    <input type="text" placeholder="Ingrese nombre o numero de control" class="form-control ">
    <input type="submit" class="btn btn-primary" value="Buscar">
  </form>

  <p class="p-al">Seleccionar por grupo</p>

  <form action="" class="col-md-5 formAdmAl">

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
          
        </tr>
      </thead>
      <tbody>

        @foreach($alumnos as $alumno)
        <tr>
          <th scope="row">{{$alumno->numeroControl}} </th>
          <td> <a href="{{route('viewUpdate',[$id=$alumno->id])}}">{{$alumno->name}} {{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}}</a></td>
        
        </tr>
        @endforeach
       

      </tbody>
    </table>
  </div>
 


</div>
