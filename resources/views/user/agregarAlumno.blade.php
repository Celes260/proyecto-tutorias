
<form class="container-funcion col-md-10 bx-panel">
    <div class="bx-h1 p-h1">
        <h1 class="p-4">Registrar nuevo alumno</h1>
    </div>
    

    <div class="bx-registro">
        <div class="bx-inputs">
            
                <label for="exampleFormControlInput1" class="form-label">Nombre(s)</label>
                <input type="email" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar nombre">
            
            
                <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label>
                <input type="email" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresa apellido paterno">
            

                <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
                <input type="email" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar apellido materno">
            
                <label for="exampleFormControlInput1" class="form-label">Numero de control</label>
                <input type="email" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar numero de control">
            
        </div>

        <div class="bx-inputs">
            <label for="exampleFormControlInput1" class="form-label">Carrera</label>
            <select class="form-select input-registro" aria-label="Default select example">
              <option selected value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
              <option value="Ingeniería en innovación Agrícola">Ingeniería en innovacion Agricola</option>
              <option value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
              <option value="Ingeniería en Industrias Administración">Ingeniería en Administracion</option>
              <option value="Ingeniería en Mecantrónica">Ingeniería en Mecantrónica</option>
            </select>

              <label for="exampleFormControlInput1" class="form-label">Semestre</label>
              <select class="form-select input-registro" aria-label="Default select example">
                <option selected value="Ingeniería en Sistemas Computacionales">1º</option>
                <option value="Ingeniería en innovación Agrícola">2º</option>
                <option value="Ingeniería en Industrias Alimentarias">3º</option>
                <option value="Ingeniería en Industrias Administración">4º</option>
                <option value="Ingeniería en Mecantrónica">5º</option>
                <option value="Ingeniería en Mecantrónica">6º</option>
                <option value="Ingeniería en Mecantrónica">7º</option>
                <option value="Ingeniería en Mecantrónica">8º</option>
              </select>

              <label for="exampleFormControlInput1" class="form-label">Grupo</label>
              <select class="form-select input-registro" aria-label="Default select example">

              @foreach($grupos as $grupo){
                <option value="{{$grupo->id}}">{{$grupo->grupo}}</option>
              }
              @endforeach
              </select>

        </div>
      </div>

    <div class="bx-btn-registro">
        <input type="submit" value="Registrar" class="btn btn-success">
    </div>

  </form>