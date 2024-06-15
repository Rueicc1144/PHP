<?php
$link = mysqli_connect('localhost', 'root', '0000', 'school');

if (!$link) {
    die("無法開啟資料庫!<br/>");
}

$name = $_POST['name'];
$department = $_POST['department'];
$imagePath = '';

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $targetDir = "pic/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
    }
}

$SQL = "INSERT INTO student (Name, Department, ImagePath) VALUES ('$name', '$department', '$imagePath')";

if (mysqli_query($link, $SQL)) {
    echo "新增成功";
} else {
    echo "錯誤: " . mysqli_error($link);
}

mysqli_close($link);
header("Location: index.php");
?>