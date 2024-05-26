<div class="bx-evaluacion">

    <h1 class="btn-coments">Generar reportes a nivel de carrera e institución</h1>
    <form method="get" action="{{ route('reporteCarrera') }} " class="col-md-5 formAdmAl" id="formAdmAl">
      <select id="" name="carrera" class="form-select col-m inp-gp boton" >
              <option value="">Elige una carrera</option>
              <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
              <option class="op-carrera" value="Ingeniería en innovación Agrícola">Ingeniería en innovacion Agricola</option>
              <option class="op-carrera" value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
              <option class="op-carrera" value="Ingeniería en Industrias Administración">Ingeniería en Administracion</option>
              <option class="op-carrera" value="Ingeniería en Mecantrónica">Ingeniería en Mecantrónica</option>
      </select>
      <input type="submit" href="" class="btn btn-success boton" value="Generar repote por Carrera">
    </form>
    <a href="" class="btn btn-success boton">Generar reporte por institucion</a>
    

</div>
