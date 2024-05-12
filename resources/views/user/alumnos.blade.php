

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

    <script>


    
    </script>

   

    
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
        </tr>
      </thead>
      <tbody>

        @foreach($alumnos as $alumno)
        <tr>
          <th scope="row">{{$alumno->numeroControl}}</th>
          <td>{{$alumno->name}}</td>
          <td>{{$alumno->apellidoPaterno}}</td>
          <td>{{$alumno->apellidoMaterno}}</td>
          <td>{{$alumno->carrera}}</td>
          <td>{{$alumno->grupo->grupo}}</td>
          <td><a href="">{{$alumno->grupo->tutor->nombre}} {{$alumno->grupo->tutor->apellidoPaterno}}</a></td>
          <td></td>
          <td>{{$alumno->contra}}</td>
        </tr>
        @endforeach
       

      </tbody>
    </table>
  </div>
 


</div>
