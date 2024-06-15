<meta charset="utf-8">

<?php
$No = $_GET["No"];
echo $No;
//连接数据库
$link = mysqli_connect('localhost', 'root', '0000', 'school');

//SQL语句
$SQL = "SELECT * FROM student WHERE No='" . mysqli_real_escape_string($link, $No) . "'";
if ($result = mysqli_query($link, $SQL)) {
    $row = mysqli_fetch_assoc($result);
    $Name = $row["Name"];
    $Department = $row["Department"];
    $ImagePath = $row["ImagePath"];
}
?>

<form action="updatecheck.php" method="POST" enctype="multipart/form-data">
    編號:<?php echo $No ?><input type="hidden" name="uNo" value="<?php echo $No ?>"><br>
    姓名:<input type="text"  name="uName" value="<?php echo $Name ?>"><br/>
    系所:<input type="text"  name="uDept" value="<?php echo $Department ?>"><br/>
    當前圖片:<br>
    <?php if ($ImagePath) { ?>
        <img src="<?php echo $ImagePath; ?>" height="100px"><br>
    <?php } ?>
    更新圖片:<input type="file" name="uImage" accept="image/*"><br/>
    <input type="submit" value="提交"> 
</form>