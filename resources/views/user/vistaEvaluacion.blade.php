
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
          width: 300,
          legend: { position: 'none' },
          chart: {
            title: 'Evaluacion del tutor',
            subtitle: 'A' },
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

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          
          ["1", <?=$B1?>],
          ["2", <?=$B2?>],
          ["3", <?=$B3?>],
          ["4", <?=$B4?>],
          ['5',<?=$B5?>]
        
        
        ]);

        var options = {
          width: 300,
          legend: { position: 'none' },
          chart: {
            title: 'Evaluacion del tutor',
            subtitle: 'B' },
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div2'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          
          ["1", <?=$C1?>],
          ["2", <?=$C2?>],
          ["3", <?=$C3?>],
          ["4", <?=$C4?>],
          ['5', <?=$C5?>]
        
        
        ]);

        var options = {
          width: 300,
          legend: { position: 'none' },
          chart: {
            title: 'Evaluacion del tutor',
            subtitle: 'C' },
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div3'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          
          ["1", <?=$D1?>],
          ["2", <?=$D2?>],
          ["3", <?=$D3?>],
          ["4", <?=$D4?>],
          ['5',<?=$D5?>]
        
        
        ]);

        var options = {
          width: 300,
          legend: { position: 'none' },
          chart: {
            title: 'Evaluacion del tutor',
            subtitle: 'D' },
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div4'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>




<div class="container-funcion col-md-10 bx-panel">
    <div class="bx-container-grafica">
        <div class="bx-t">
            <h1 class="t-h1">Resultado de la evaluacion</h1>
      
        </div>

        <div class="bx-tb">
          <div class="bx-tb-cn">
            <div id="top_x_div" style="width: 300px; height: 90%;"></div>
            <div id="top_x_div2" style="width: 300px; height: 90%;"></div>
            <div id="top_x_div3" style="width: 300px; height: 90%;"></div>
          </div>

          <div class="bx-tb-cn">
            <div id="top_x_div4" style="width: 300px; height: 90%;"></div>
            
          </div>
            
       
            
        </div>
    
    </div>

</div>
  

