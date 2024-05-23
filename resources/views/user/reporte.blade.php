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
            width: 800px;
            height: 400px;
        }

        
    </style>
</head>
<body>
       <header>
         <img src="{{ asset('img/tecnm.jpg')}}" alt="">
       </header>

    <h1>Resultados de la evaluacion del tutor</h1>
    <br>
    <p><strong>Nombre del tutor:</strong>Neri Bartolo Torres</p>
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
<p><strong>Promedio de esta rubrica:</strong> 4</p>
<img src="{{$image}}" class="grafica" alt="">

<br>

</body>
</html>
