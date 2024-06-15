<?php
session_start();
?>
<html>
<meta charset="utf-8">
<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo $_SESSION["name"] + "歡迎進入網頁<br/>";
        echo "<a href='logout.php'>登出</a>";
    }else{
        echo "非法進入網頁";
        echo "3秒鐘之後回登入畫面";
        header("Refresh:3;url=login.php");
    }
}else{
    echo "非法進入網頁";
    echo "3秒鐘之後回登入畫面";
    header("Refresh:3;url=login.php");
}




?>
</html>