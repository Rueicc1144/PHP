<!DOCTYPE html>
<html lang="zh-TW">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check</title>
    </head>
    <body>
        
        <?php

        session_start();
        ob_start();
        $sid = "馬卡巴卡";
        $spass = "123";
        $password = $_POST["password"];

        $account = $_POST["account"];

        $date = strtotime("+10 days" , time());

        if($sid == $account && $spass==$password){
            echo "登入成功!!!!!，網頁將自動跳轉";
            $_SESSION["check"] = "Yes";
            setcookie("userName",$sid ,$date);
            header("Refresh:2;url=success.php");
        }else{
            $_SESSION["check"] = "No";
            echo "登入失敗";
            header("Refresh:2;url=login.php");

        }

        ob_flush();
        ?>
    </body>
</html>
