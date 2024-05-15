
<form method="post" action="{{route('guardarTutor')}}" class="container-funcion col-md-10 bx-panel">
  @csrf  
  <div class="bx-message bx-h1">
      <h1 class="p-4">Registrar Tutores</h1>
      @include('layouts.message')
</div>
    

    <div class="bx-registro-tutores">
        <div class="bx-inputs">
            
                <label for="exampleFormControlInput1" class="form-label">Nombre(s)</label>
                <input type="text" name="nombre" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar nombre" required>
                
                @if($errors->has('nombre'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('nombre')}}</strong>
                       </span>
                 @endif
            
                <label for="exampleFormControlInput1" class="form-label">Apellido paterno</label>
                <input type="text" name="apellidoPaterno" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresa apellido paterno" required>
            
                @if($errors->has('apellidoPaterno'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('apellidoPaterno')}}</strong>
                       </span>
                 @endif

                <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
                <input type="text" name="apellidoMaterno" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar apellido materno" required>
            
                @if($errors->has('apellidoMaterno'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('apellidoMaterno')}}</strong>
                       </span>
                 @endif

                 <label for="exampleFormControlInput1" class="form-label">Numero de control</label>
                <input type="text" name="numeroControl" class="form-control input-registro" id="exampleFormControlInput1" placeholder="Ingresar numero de control" required>
                @if($errors->has('numeroControl'))
                      <span class="invalid_feedback" role="alert">
                             <strong>{{$errors->first('numeroControl')}}</strong>
                       </span>
                 @endif 
        </div>

    
      </div>

    <div class="bx-btn-registro">
        <input type="submit" value="Registrar" class="btn btn-success">
    </div>

  </form>