
<form method="post" action="{{route('agregarGrupo')}}" class="container-funcion col-md-10 bx-panel">
  @csrf  
  <div class="bx-message bx-h1">
      <h1 class="p-4">Registrar grupo</h1>
      @include('layouts.message')
</div>
    

    <div class="bx-registro-tutores">
        <div class="bx-inputs">
            
                <label for="exampleFormControlInput1" class="form-label">Grupo</label>
                <input type="text" name="grupo" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar grupo" required>
                
                @if($errors->has('grupo'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('grupo')}}</strong>
                       </span>
                 @endif

                 <label for="exampleFormControlInput1" class="form-label">Tutor</label>
              <select class="form-select input-registro" aria-label="Default select example" name="tutor_id">
               
               @foreach($tutores as $tutor)
                    <option value="{{$tutor->id}}">{{$tutor->nombre}} {{$tutor->apellidoPaterno}} {{$tutor->apellidoMaterno}}</option>

               @endforeach
               

                
              </select>
              @if($errors->has('tutor_id'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('tutor_id')}}</strong>
                       </span>
                 @endif
                                                    
                <label for="exampleFormControlInput1" class="form-label">Carrera</label>
                <select class="form-select input-registro" aria-label="Default select example" name="carrera">
              <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
              <option value="Ingeniería en innovación Agrícola">Ingeniería en innovacion Agricola</option>
              <option value="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</option>
              <option value="Ingeniería en Industrias Administración">Ingeniería en Administracion</option>
              <option value="Ingeniería en Mecantrónica">Ingeniería en Mecantrónica</option>
            </select>
            


                <label for="exampleFormControlInput1" class="form-label">Semestre</label>
                <input type="text" name="semestre" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar semestre" required>
            
                @if($errors->has('semestre'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('semestre')}}</strong>
                       </span>
                 @endif

                
        </div>

    
      </div>

    <div class="bx-btn-registro">
        <input type="submit" value="Registrar" class="btn btn-success">
    </div>

  </form>