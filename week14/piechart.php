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
          ['City', 'Pop'],
        
        <?php
        while($row=mysqli_fetch_assoc($result)){
            
        echo "['" . $row['City'] . "'," .  $row['Pop']. "],";
        }

        mysqli_close($link);
        ?>
        ]);

        var options = {
          title: 'City Population'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
