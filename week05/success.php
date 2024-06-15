<?php
session_start();

if(isset($_SESSION["check"])){
    if($_SESSION["check"] == "Yes"){
        echo "歡迎進入網葉<br>";
        echo "<a href='logout.php'>登出</a>";
    }else{
        echo "錯誤進入網頁";
        echo "即將返回頁面";
        header("Refresh:2,url=login.php");
    }
}else{
    echo "好像有問題";
}
