<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        echo "<link rel='stylesheet'  type='text/css' href='party5.css'>";
        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>";
    
        ?>
    </head>
    <body>

            <?php
            $sid = "馬卡巴卡";
            $spass = "123";

            $account = $_POST["account"];
            $password = $_POST["password"];
            $date = strtotime("+7 days", time());

            if($sid == $account && $spass == $password){
                $_SESSION["check"] = "Yes";
                setcookie("Acc", $account, $date);
                header("Refresh:0,url=party2.php");
            }else{
                $_SESSION["check"] = "No";
                setcookie("Acc", "錯誤", $date);
                echo "<div class='label' >登入失敗，將回登入畫面</div>";
                header("Refresh:2;url=party_login.php");
            }
            ?>

    </body>
</html>