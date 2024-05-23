
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          ["1", <?=$A1?>],
          ["2", <?=$A2?>],
          ["3", <?=$A3?>],
          ["4", <?=$A4?>],
          ['5',<?=$A5?>]
        

        ]);

        var options = {
          title: 'Pregunta A',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafica1'));
        chart.draw(data, options);
        document.getElementById('g-1').value=chart.getImageURI();
      }
    </script>

<script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          
          ["1", <?=$B1?>],
          ["2", <?=$B2?>],
          ["3", <?=$B3?>],
          ["4", <?=$B4?>],
          ['5',<?=$B5?>]
        

        ]);

        var options = {
          title: 'Pregunta B',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafica2'));
        chart.draw(data, options);
        document.getElementById('g-2').value=chart.getImageURI();
      }
    </script>

<script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          
          ["1", <?=$C1?>],
          ["2", <?=$C2?>],
          ["3", <?=$C3?>],
          ["4", <?=$C4?>],
          ['5', <?=$C5?>]

        ]);

        var options = {
          title: 'Pregunta C',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafica3'));
        chart.draw(data, options);
        document.getElementById('g-3').value=chart.getImageURI();
      }
    </script>

<script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          
          ["1", <?=$D1?>],
          ["2", <?=$D2?>],
          ["3", <?=$D3?>],
          ["4", <?=$D4?>],
          ['5', <?=$D5?>]
        ]);

        var options = {
          title: 'Pregunta D',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
        document.getElementById('g-4').value=chart.getImageURI();
      }
    </script>




<div class="container-funcion col-md-10 bx-panel">
    <div class="bx-container-grafica">
        <div class="bx-t">
            <h1 class="t-h1">Resultado de la evaluacion</h1>
      
        </div>

        <div class="bx-tb">
          <div class="bx-tb-cn">
            <div id="grafica1" style="width: 500px; height: 90%;"></div>
            <div id="grafica2" style="width: 500px; height: 90%;"></div>
            <div id="grafica3" style="width: 500px; height: 90%;"></div>
          </div>

          <div class="bx-tb-cn">
            <div id="piechart_3d" style="width: 500px; height: 300px;"></div>
            
          </div>
            
          <form method="post" action="{{ route('generarPDF') }}">
          @csrf
            <input type="hidden" name="g-1" id="g-1"> 
            <input type="hidden" name="tutor" value="{{$id_tutor}}"> 
            <input type="submit" value="Generar PDF" class="btn btn-success">

          </form>
       
            
        </div>
    
    </div>

</div>
  

