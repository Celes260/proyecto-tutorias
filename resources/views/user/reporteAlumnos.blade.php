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

    <h1>Reporte de alumnos por grupo</h1>
    <br>
    

    <table>
    
    <tr>
        <th class="w-normal">Nombre</th>
        <th class="w-normal">Grupo</th>
        <th class="w-normal">Semestre</th>
        <th class="w-normal">Carrera</th>
        <th class="w-normal">Número de control</th>
        <th class="w-normal">Contraseña</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}} {{$user->apellidoPaterno}} {{$user->apellidoMaterno}} </td>
        <td>{{$user->grupo->grupo}}</td>
        <td>{{$user->semestre}}</td>
        <td>{{$user->carrera}}</td>
        <td>{{$user->numeroControl}}</td>
        <td>{{$user->contra}}</td>
    </tr>

    @endforeach
    
</table>
    
   


</body>
</html>
