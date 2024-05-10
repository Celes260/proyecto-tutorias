
<form method="post" action="{{route('actualizandoAlumno',[$id=$alumno->id])}}" class="container-funcion col-md-10 bx-panel">
  @csrf  
  <div class="bx-h1 p-h1">
        <h1 class="p-4">Actualizar alumno</h1>
    </div>
    

    <div class="bx-registro">
        <div class="bx-inputs">
            
                <label for="exampleFormControlInput1" class="form-label">Nombre(s)</label>
                <input type="text" name="nombre" value="{{$alumno->name}}" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar nombre" required>
                
                @if($errors->has('nombre'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('nombre')}}</strong>
                       </span>
                 @endif
            
                <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label>
                <input type="text" value="{{$alumno->apellidoPaterno}}" name="apellidoPaterno" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresa apellido paterno" required>
            
                @if($errors->has('apellidoPaterno'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('apellidoPaterno')}}</strong>
                       </span>
                 @endif

                <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
                <input type="text" value="{{$alumno->apellidoMaterno}}" name="apellidoMaterno" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar apellido materno" required>
            
                @if($errors->has('apellidoMaterno'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('apellidoMaterno')}}</strong>
                       </span>
                 @endif

                <label for="exampleFormControlInput1" class="form-label">Numero de control</label>
                <input type="text" value="{{$alumno->numeroControl}}" name="numeroControl" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar numero de control" required>
                @if($errors->has('numeroControl'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('numeroControl')}}</strong>
                       </span>
                 @endif
        </div>

        <div class="bx-inputs">
            <label for="exampleFormControlInput1" class="form-label">Carrera</label>
            <select class="form-select input-registro" aria-label="Default select example" name="carrera">
                <option selected value="{{$alumno->carrera}}">{{$alumno->carrera}}</option>
              <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
              <option value="Ingeniería en innovación Agrícola">Ingeniería en innovacion Agricola</option>
              <option value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
              <option value="Ingeniería en Industrias Administración">Ingeniería en Administracion</option>
              <option value="Ingeniería en Mecantrónica">Ingeniería en Mecantrónica</option>
            </select>

              <label for="exampleFormControlInput1" class="form-label">Semestre</label>
              <select class="form-select input-registro" aria-label="Default select example" name="semestre">
                <option selected value="{{$alumno->semestre}}">{{$alumno->semestre}}</option>
                <option  value="1">1º</option>
                <option value="2">2º</option>
                <option value="3">3º</option>
                <option value="4">4º</option>
                <option value="5">5º</option>
                <option value="6">6º</option>
                <option value="7">7º</option>
                <option value="8">8º</option>
              </select>

              <label for="exampleFormControlInput1" class="form-label">Grupo</label>
              <select class="form-select input-registro" aria-label="Default select example" name="grupo">
              <option selected value="{{$alumno->grupo->id}}">{{$alumno->grupo->grupo}}</option>
              @foreach($grupos as $grupo){
                
                <option value="{{$grupo->id}}">{{$grupo->grupo}}</option>
              }
              @endforeach
              </select>

        </div>
      </div>

    <div class="bx-btn-registro">
        <input type="submit" value="Actualizar" class="btn btn-success">
    </div>

  </form>