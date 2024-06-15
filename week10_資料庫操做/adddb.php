<meta charset="utf8">


<?php 
$link  = mysqli_connect('localhost', 'root', '1144opdbb8', 'school');

$sName = mysqli_real_escape_string($link, $_POST["sName"]);
$sDept = mysqli_real_escape_string($link, $_POST["sDept"]);

//SQl語法
$SQL = "INSERT INTO student(Name, Department) VALUES('$sName', '$sDept')";

if (!$link) {
    die("連接失敗：" . mysqli_connect_error());
}

//送出查詢
if($result = mysqli_query($link, $SQL)){
    echo "<br/>新增成功";
}
echo "<br/><a href='index.php'>查看資料庫資料</a>";