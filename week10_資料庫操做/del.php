<meta charset="utf8">

<?php
$sNo = $_GET["sNo"];
echo $sNo;

$link = mysqli_connect('localhost', 'root', '1144opdbb8' , 'school');

$SQL = "DELETE FROM student WHERE No='$sNo'";

if($result = mysqli_query($link, $SQL)){
    echo "<br/>刪除成功";
}
echo "<br/><a href='index.php'>查看資料表</a>";