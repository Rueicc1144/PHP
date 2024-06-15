<meta charset="utf8">

<?php
//連接資料庫
$link  = mysqli_connect('localhost', 'root', '0000', 'school');

if(!$link){
    die("無法開啟資料庫!<br/>");
}else{
    echo "資料庫:開啟成功";
}

//SQl語法
$SQL = "SELECT * FROM student"; 

//送出查詢
$result = mysqli_query($link, $SQL);

//結果轉陣列
echo "<table border='1'>";  

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
        echo "<td>" . $row["No"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Department"] . "</td>" ;
    echo "</tr>";
}

echo "</table><a href='add.php'>去新增</a>";
echo "<br>";
echo "<a href='excel.php'>下載Excel檔</a>";
echo "<br>";
echo "<a href='pdf.php'>下載pdf檔</a>";

mysqli_close($link);
?>