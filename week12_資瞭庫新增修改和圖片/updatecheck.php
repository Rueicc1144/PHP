<?php
$link = mysqli_connect('localhost', 'root', '0000', 'school');

if (!$link) {
    die("無法開啟資料庫!<br/>");
}

$No = $_POST['uNo'];
$Name = $_POST['uName'];
$Department = $_POST['uDept'];
$imagePath = '';

if (isset($_FILES['uImage']) && $_FILES['uImage']['error'] == 0) {
    $targetDir = "pic/";
    $targetFile = $targetDir . basename($_FILES["uImage"]["name"]);
    if (move_uploaded_file($_FILES["uImage"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
    }
}

$SQL = "UPDATE student SET Name='$Name', Department='$Department'";

if ($imagePath) {
    $SQL .= ", ImagePath='$imagePath'";
}

$SQL .= " WHERE No='$No'";

if (mysqli_query($link, $SQL)) {
    echo "更新成功";
} else {
    echo "錯誤: " . mysqli_error($link);
}

mysqli_close($link);
header("Location: index.php");
?>