

<div class="container-funcion col-md-10 bx-panel" id="bx-alumn">

  <h1 class="p-al">Grupos por carrera en el Instituto Tecnológico Superior de Tacámbaro</h1>
  @include('layouts.message')
  
  
  

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
         
          <th scope="col">Grupo</th>
          <th scope="col">Semestre</th>
          <th scope="col">Carrera</th>
          <th scope="col">Tutor</th>
          <th scope="col">ver evaluacion</th>
          
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>

        @foreach($grupos as $grupo)
        <tr>
          <th scope="row"><a href="{{route('viewActualizarGrupo',[$grupo->id])}}">{{$grupo->grupo}} </a></th>
          <td>{{$grupo->semestre}} </td>
          <td>{{$grupo->carrera}}</td>
          <td>{{$grupo->tutor->nombre}} {{$grupo->tutor->apellidoPaterno}} {{$grupo->tutor->apellidoMaterno}}</td>
         
          <td><a href="{{ route('verEvaluacion',[$id=$grupo->tutor->id]) }}" class="btn btn-success">Ver evaluacion</a></td>
          
          
          <td>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$grupo->id}}">
            Eliminar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$grupo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$grupo->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{$grupo->id}}">Borrar grupo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro que deseas borrar a el grupo {{$grupo->grupo}} ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="{{route('eliminarGrupo',[$grupo->id])}}" class="btn btn-danger">Borrar</a>
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
