<div class="bx-evaluacion">

    <h1 class="btn-coments">Generar reportes a nivel de carrera e institución</h1>
    <form method="get" action="{{ route('reporteCarrera') }} " class="col-md-5 formAdmAl" id="formAdmAl">
      <select id="" name="carrera" class="form-select col-m inp-gp boton" >
            
              <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
              <option class="op-carrera" value="Ingeniería en innovación Agrícola">Ingeniería en innovacion Agricola</option>
              <option class="op-carrera" value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
              <option class="op-carrera" value="Ingeniería en Industrias Administración">Ingeniería en Administracion</option>
              <option class="op-carrera" value="Ingeniería en Mecantrónica">Ingeniería en Mecantrónica</option>
      </select>
      <input type="submit" href="" class="btn btn-success boton" value="Generar repote por Carrera">
    </form>
    <a href="{{ route('reporteInstitucion') }}" class="btn btn-success boton">Generar reporte por institucion</a>
    <br>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Empezar evaluación
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Empezar evaluación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       ¿Estás seguro que deseas inicar una nueva evaluación?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{route('iniciarEvaluacion')}}" class="btn btn-primary">Iniciar evaluación</a>
      </div>
    </div>
  </div>
</div>
    

</div>
