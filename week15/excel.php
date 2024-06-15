<meta charset="utf-8">

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

header("Pragma: public");
header("Expires: 0");
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: inline; filename="applicant.xls";');
header('Content-Transfer-Encoding: binary');

echo "<table>";
echo "<tr>";
echo "<td>NO.</td>";
echo "<td>英文姓名</td>";
echo "<td>系所</td>";
echo "</tr>";
Echo "</table>";


echo "<table border='1'>";  
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["No"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Department"] . "</td>" ;
}