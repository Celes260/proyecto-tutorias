<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          ["1", 9],
          ["2", 8],
          ["3", 7],
          ["4", 8],
          ['5',5]
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

     
    
            document.getElementById('chart_image').val;
          
         
   
      };

    
    </script>
    <div id="top_x_div" style="width: 300px; height: 90%;"></div>