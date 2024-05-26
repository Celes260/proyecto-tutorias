<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1{
            text-align: center;
            font-size: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            
            border: 1px solid black;
            padding: 8px;
            text-align: center;
          
        }
        .w-normal{
            font-weight: normal;
        }
        .grafica{
            margin-left: 40px;
            width: 700px;
            height: 350px;
        }

        
    </style>
</head>
<body>
       <header>
         <img src="{{ asset('img/tecnm.jpg')}}" alt="">
       </header>

    <h1>Resultados de la evaluacion del tutor a nivel carrera</h1>
    <br>
    
    <table>
    <tr class="title-row">
        <th colspan="5">A. Genera un clima de confianza que permite el logro de los propósitos de la tutoria
    </th>
    </tr>
    <tr>
        <th class="w-normal">5.- Genera
            confianza y
            buena
            comunicación
            con todo el
            grupo. Hace
            agradable la
            sesión de tutoría.
            Escucha con
            atención todo lo
            que se lo solicita.
            Se muestra
            empático con las
            consultas que se
            le hacen</th>
        <th class="w-normal">4.- Genera
            confianza y
            buena
            comunicación
            con todo el
            grupo. Hace
            agradable la
            sesión de tutoría.
            Escucha con
            atención todo lo
            que se le solicita</th>
        <th class="w-normal">3.- Genera
            confianza y
            buena
            comunicación
            con todo el
            grupo. Hace
            agradable la
            sesión de tutoría</th>
        <th class="w-normal">2.-Genera
            confianza y
            buena
            comunicación
            con todo el grupo</th>
        <th class="w-normal">1.-Se comunica
            con todo el grupo
</th>
    </tr>
    <tr>
        <td>{{$A5}}</td>
        <td>{{$A4}}</td>
        <td>{{$A3}}</td>
        <td>{{$A2}}</td>
        <td>{{$A1}}</td>
    </tr>
    
</table>
<p><strong>Promedio de respuestas:</strong> {{$promedioA}}</p>

<img src="{{$image}}" class="grafica" alt="">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<header>
         <img src="{{ asset('img/tecnm.jpg')}}" alt="">
</header>

<!-- Segunda hoja del reporte -->
<h1>Resultados de la evaluacion del tutor a nivel carrera</h1>
    <br>
   
    <table>
    <tr class="title-row">
        <th colspan="5">B. Calidad de la información proporcionada al tutorado
    </th>
    </tr>
    <tr>
        <th class="w-normal">5.-Da información necesaria sobre el programa de tutorias.
             Provee de la información adecuada para realizar trámites escolares.
              Proporciona información suficiente sobre los apoyos que requiere el estudiantes. 
              Da información y orientación importante que apoye el área personal del tutorado.
         informa con precisión sobre las asesorias académicas
              que ofrece los docentes de su 
               carrera</th>
        <th class="w-normal">4.-Da información necesaria
             sobre el programa de tutorias. 
            Provee de la información adecuada para realizar 
            trámites escolares. 
            Proporciona información suficiente 
            sobre los apoyos que requiere el estudiante, 
            da información y orientación importante que 
            apoye el area personal del tutorado.</th>
        <th class="w-normal">3.- Da información necesaria sobre el programa de tutorias. 
            Provee de la información adecuada  para realizar trámites y pueda escolares.
             Proporciona información suficiente sobre  los apoyos que requiere el estudiante. </th>
        <th class="w-normal">2.-Da información necesaria sobre el programa de tutorias. 
            Provee de la información adecuada para realizar trámites escolares.</th>
        <th class="w-normal">1.-comenta en que consiste el programa de tutorias.
</th>
    </tr>
    <tr>
        <td>{{$B5}}</td>
        <td>{{$B4}}</td>
        <td>{{$B3}}</td>
        <td>{{$B2}}</td>
        <td>{{$B1}}</td>
    </tr>
    
</table>
<p><strong>Promedio de respuestas:</strong> {{$promedioB}}</p>

<img src="{{$image2}}" class="grafica" alt="imagen">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<header>
         <img src="{{ asset('img/tecnm.jpg')}}" alt="">
</header>
<!-- Tercera Hoja -->
<h1>Resultados de la evaluacion del tutor a nivel Carrera</h1>

    
    <table>
    <tr class="title-row">
        <th colspan="5">C. Disponibilidad y calidad en la atención tutorial.
    </th>
    </tr>
    <tr>
        <th class="w-normal">5.- Se le puede localizar en cualquier momento. 
            Entrego su horario y localización desde le inicio del semestre.
             Atiende con amabilidad cada que se le necesita. 
             Canaliza adecuadamente a los tutorados siempre que tienen algún problema y el que no pueda resolver.
              Realiza su funcion tutorial con disponibilidad y calidad. 
              Le da seguimiento a los tutorados que ha canalizado.</th>
        <th class="w-normal">4.- se le puede localizar en cualquier momento.
            Entrego su horario y localización desde el inicio del semestre. 
            Atiende con amabilidad cada que se le necesita. 
            Canaliza adecuadamente a los tutorados 
            siempre tienen algún problema
             y que  no lo pueda resolver.</th>
        <th class="w-normal">3.-Entrego su horario y 
            localizacion desde el incio del semestre.
             Atiende con amabilidad cada que se le necesita. 
             Canaliza adecuadamente a los tutorados siempre 
             que tienen algun problema 
             y que él no pueda resolver</th>
        <th class="w-normal">2.-Atiende con amabilidad cada que se le necesita. 
            Canaliza adecuadamente a los tutorados siempre
             que tienen algún problema que él no pueda resolver</th>
        <th class="w-normal">1.-Atiende con amabilidad cada que se le necesita.
</th>
    </tr>
    <tr>
        <td>{{$C5}}</td>
        <td>{{$C4}}</td>
        <td>{{$C3}}</td>
        <td>{{$C2}}</td>
        <td>{{$C1}}</td>
    </tr>
    
</table>
<p><strong>Promedio de respuestas:</strong> {{$promedioC}}</p>

<img src="{{$image3}}" class="grafica" alt="imagen">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<header>
         <img src="{{ asset('img/tecnm.jpg')}}" alt="">
</header>

<h1>Resultados de la evaluacion del tutor a nivel Carrera</h1>

    
    <table>
    <tr class="title-row">
        <th colspan="5">D.-Planeación y preparación en los procesos de la Tutoría.
    </th>
    </tr>
    <tr>
        <th class="w-normal">5.-Muestra tener las herramientas 
            necesarias para atender el grupo y/o individualmente.
            Realiza la programación de las sesiones considerando 
            los tiempos disponibles de los estudiantes.
            Muestra evidencia de que planeó las sesiones individuales 
            y grupales con sus tutorados pues lleva un orden en sus actividades.
            Realiza sus actividades como tutor respetando los tiempos disponibles
            para ello evitando interrupciones que coarten el hilo de la sesión..
            Planea, ejecuta y evalúa su actividad 
            tutorial continuamente con fines de realimentación.</th>
        <th class="w-normal">4.- Muestra tener las herramientas 
            necesarias para atender el grupo y/o  individual 
            .  Realiza la programación de las sesiones 
            considerando los tiempos disponibles de los estuduantes. 
             Muestra evidencias de que planeó las sesiones individuales
              y grupales con sus tutorados pues lleva un orden en sus actividades.  
               Realiza sus actividades como tutor respetando los tiempos disponibles para ello
                evitando interrupciones que cuarten el hilo de la sesiòn. </th>
        <th class="w-normal">3.-Muestra tener las herramientas 
             necesarias para atender el grupo y/o individualmente.  
               Realiza la programación de las sesiones considerando
                los tiempos disponibles de los estudiantes  
                 Muestra evidencias de que planeó las sesiones individuales
                  y grupales con sus tutorados pues lleva un orden en sus actividades</th>
        <th class="w-normal">2.-Atiende con amabilidad cada que se le necesita. 
            Canaliza adecuadamente a los tutorados siempre
             que tienen algún problema que él no pueda resolver</th>
        <th class="w-normal">1.-Atiende con amabilidad cada que se le necesita.
</th>
    </tr>
    <tr>
        <td>{{$D5}}</td>
        <td>{{$D4}}</td>
        <td>{{$D3}}</td>
        <td>{{$D2}}</td>
        <td>{{$D1}}</td>
    </tr>
    
</table>
<p><strong>Promedio de respuestas:</strong> {{$promedioD}}</p>

<img src="{{$image4}}" class="grafica" alt="imagen">

<p><strong>El promedio general del tutor es de: </strong>{{$promedioGeneral}}</p>



</body>
</html>
