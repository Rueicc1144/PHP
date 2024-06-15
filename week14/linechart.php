<?php
$link = @mysqli_connect(
    'localhost',
    'root',
    '0000',
    'city'
);

if(!$link){
    die("無法開啟!<br>");
}else{
    echo "成功開啟<br>";
}

$SQL = "SELECT * FROM city";

$result = mysqli_query($link, $SQL);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['City', 'Population'],
          <?php
          while($row = mysqli_fetch_assoc($result)){
            $city = $row['City'];
            $population = $row['Pop'];
            echo "['$city', $population],";
          } 
          ?>
        ]);

        var options = {
          title: 'City Population',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('column_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="column_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>