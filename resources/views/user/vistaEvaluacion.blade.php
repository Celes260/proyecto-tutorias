
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          
          ["1", <?=$A1?>],
          ["2", <?=$A2?>],
          ["3", <?=$A3?>],
          ["4", <?=$A4?>],
          ['5',<?=$A5?>]
        
        
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Evaluacion del tutor',
            subtitle: 'numero de respuestas' },
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

<div class="container-funcion col-md-10 bx-panel">
    <div class="bx-container-grafica">
        <div class="bx-t">
            <h1 class="t-h1">Registrar alumnos</h1>
      
        </div>

        <div id="top_x_div" style="width: 800px; height: 400px;"></div>
    
    </div>

</div>
  

