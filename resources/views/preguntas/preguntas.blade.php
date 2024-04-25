@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p class="font col-md-12"> <strong>Instrucciones:</strong> El tutorado seleccionará en cada uno de los indicadores de 
                acuerdo al desempeño mostrado durante el curso de tutoría, 
                el nivel de desempeño alcanzado por el tutor considerando que el 5 
                representa el más alto nivel y el 1 representa el nivel más bajo.</p>

            <form action="{{ route('preguntas.enviar') }}" method="POST" class="col-md-12">
                @csrf
                <div class="bx-tituloPregunta col-md-12">
                    <strong class="lblPregunta col-md-11" for="indicador A">1.- Genera un clima de confianza que permite el logro de los propositos de la tutoria</strong>
                    <strong class="strOpcion">opcion</strong>
                </div>

                <div class="bx-option col-md-10" >
                    <label for="" class="col-md-12"> <strong> Valor 5:</strong> Genera confianza y buena comunicación con
                     todo el grupo, hace agradable la sesión de la tutoría, Escucha con atención todo lo que se 
                     le solicita y se muestra empático con las consultas que se le hacen.</label>
                    <input type="radio" name="indicadorA" class="radio form-check-input " value="5" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 4: </strong>Genera confianza y buena comunicación con todo el grupo, hace agradable la sesión de tutorías y escucha  con atención todo lo que se le solicita.</label>
                    <input type="radio" name="indicadorA" class="radio form-check-input" value="4" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 3: </strong>Genera confianza y buena comunicación con todo el grupo y hace agradable la sesión de tutorías.</label>
                    <input type="radio" name="indicadorA" value="3" class="radio form-check-input" required> 
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 2: </strong>Genera confianza y buena comunicación con todo el grupo.</label>
                    <input type="radio" name="indicadorA" value="2" class="radio form-check-input">
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 1: </strong>Se comunica con todo el grupo. </label>
                    <input type="radio" name="indicadorA" value="1" class="radio form-check-input" required>
                </div>
                <br>


                <div class="bx-tituloPregunta col-md-12">

                    <strong class="lblPregunta col-md-11" for="indicador A">2.- Tiene calidad de la informacion proporcionada al tutorado</strong>
                    <strong class="strOpcion">opcion</strong>
                </div>
                <div class="bx-option col-md-10" >
                    <label for="" class="col-md-12"> <strong> Valor 5:</strong> Da información necesaria sobre el programa de tutorías, prevé de la información adecuada para realizar trámites escolares, 
                    proporciona información suficiente sobre los apoyos que requiere el estudiante, da información y orientación 
                    importante que apoye el área personal del tutorado, informa con precisión sobre las asesorías académicas que ofrecen
                     los docentes de su carrera. </label>
                    <input type="radio" name="indicadorB" value="5" class="radio form-check-input " required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 4: </strong>Da información necesaria sobre el programa de tutorías, 
                    prevé de la información adecuada para realizar trámites escolares, proporciona información
                     suficiente sobre los apoyos que requiere el estudiante, da información y orientación importante 
                     que apoye el área personal del tutorado.</label>
                    <input type="radio" name="indicadorB" value="4"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 3: </strong>Da información necesaria sobre el programa de tutorías,  Prevé  de la información adecuada para realizar trámites escolares,
                     proporciona información suficiente sobre los apoyos que requiere el estudiante.</label>
                    <input type="radio" name="indicadorB" value="3"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 2: </strong>Da información necesaria sobre el programa de tutorías, prevé de la información adecuada para realizar trámites escolares.</label>
                    <input type="radio" name="indicadorB" value="2"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 1: </strong>Comenta en que consiste el  programa de tutorías. </label>
                    <input type="radio" name="indicadorB" value="1"  class="radio form-check-input" required>
                </div>
                <br>

                <div class="bx-tituloPregunta col-md-12">
                    <strong class="lblPregunta col-md-11" for="indicador A">3.- Tiene disponibilidad y calidad en la atencion tutorial</strong>
                    <strong class="strOpcion">opcion</strong>
                </div>
                <div class="bx-option col-md-10" >
                    <label for="" class="col-md-12"> <strong> Valor 5:</strong> Se le puede localizar en cualquier momento, entregó su horario y localización desde el inicio del semestre, 
                    atiende con amabilidad cada que se le necesita, canaliza adecuadamente a los tutorados siempre que tienen algún problema y que él no pueda resolver, 
                    realiza su función tutorial con disponibilidad y calidad y le da seguimiento a los tutorados que ha canalizado. </label>
                    <input type="radio" name="indicadorC" value="5"  class="radio form-check-input " required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 4: </strong>Se le puede localizar en cualquier momento, entregó su horario y localización desde el inicio del semestre, 
                    atiende con amabilidad cada que se le necesita, 
                    canaliza adecuadamente a los tutorados siempre que tienen algún problema y que él no pueda resolver.</label>
                    <input type="radio" name="indicadorC" value="4"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 3: </strong>Entrego su horario y localización desde inicio del semestre, 
                    atiende con amabilidad cada que se le necesita, 
                    canaliza adecuadamente a los tutorados siempre que tienen algún problema y que él no pueda resolver.</label>
                    <input type="radio" name="indicadorC" value="3"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 2: </strong>Atiende con amabilidad cada que se le necesita, canaliza adecuadamente a los tutorados siempre que tienen algún problema que él no pueda resolver.</label>
                    <input type="radio" name="indicadorC" value="2"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 1: </strong>Atiende con amabilidad cada que se le necesita.</label>
                    <input type="radio" name="indicadorC" value="1"  class="radio form-check-input" required>
                </div>

                <br>

                <div class="bx-tituloPregunta col-md-12">
                    <strong class="lblPregunta col-md-11" for="indicador A">4.- Planeacion y preparacion en los procesos de tutoría</strong>
                    <strong class="strOpcion">opcion</strong>
                </div>
                <div class="bx-option col-md-10" >
                    <label for="" class="col-md-12"> <strong> Valor 5:</strong> Muestra tener las herramientas necesarias para atender el grupo y/o individualmente,
                     realiza la programación de las sesiones considerando los tiempos disponibles de los estudiantes, muestra evidencias de que planeó las sesiones individuales y grupales con sus tutorados pues lleva un orden en sus actividades,
                      realiza sus actividades como tutor respetando los tiempos disponibles para ello evitando interrupciones que cuarten el hilo de la sesión y planea, ejecuta y evalúa sus actividad tutorial continuamente con fines de realimentación. </label>
                    <input type="radio" name="indicadorD" value="5"  class="radio form-check-input " required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 4: </strong>Muestra tener las herramientas necesarias para atender al grupo y/o individualmente, realiza la  programación de las sesiones considerando los tiempos disponibles de los estudiantes, 
                    muestra evidencias de que planeó las sesiones individuales y grupales con sus tutorados pues lleva un orden en sus actividades, realiza sus actividades como tutor respetando los tiempos disponibles para ello evitando interrupciones que coarten el hilo de la sesión.</label>
                    <input type="radio" name="indicadorD" value="4"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 3: </strong>Muestra tener las herramientas necesarias para atender el grupo y/o  individualmente, realiza la programación de las sesiones considerando los tiempos disponibles de los estudiantes, 
                    muestra evidencias de que planeó las sesiones individuales y grupales con sus tutorados pues lleva un orden en sus actividades.</label>
                    <input type="radio" name="indicadorD" value="3"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 2: </strong>Muestra tener las herramientas necesarias para atender el grupo y/o individualmente, realiza la programación de las sesiones considerando los tiempos disponibles de los estudiantes.</label>
                    <input type="radio" name="indicadorD" value="2"  class="radio form-check-input" required>
                </div>

                <div class="bx-option col-md-10">
                    <label for="" class="col-md-12"> <strong> Valor 1: </strong>Muestra tener las herramientas para atender el grupo y/o individualmente.</label>
                    <input type="radio" name="indicadorD" value="1"  class="radio form-check-input" required>
                </div>
                <br>

                <label for="comentarios">Comentarios (es importante escribir el comentario que consideres, nos ayudara a brindarte mejor atención)  </label>
                <textarea class="form-control" name="comentarios" id="" cols="30" rows="10"></textarea>
                <br>
                <input type="submit" class="btn btn-success" value="Enviar">


            </form>
           
        </div>
    </div>
</div>
@endsection
