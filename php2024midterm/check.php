<?php
session_start();

$chairid = "chair";
$chairpass = "123";

$reviewerid = "reviewer";
$reviewerpass = "234";

$authorid = "author";
$authorpass = "345";


$account = $_POST["account"];
$password = $_POST["password"];
$email = $_POST["email"];
$date = strtotime("+7 days", time());



if($account == $chairid && $password == $chairpass){
    $_SESSION["check"] = "Yes";
    setcookie("acc", $email, $date);
    header("Refresh:0, url=chair.php");
}else if($account == $reviewerid && $password == $reviewerpass){
    $_SESSION["check"] = "Yes";
    setcookie("acc", $email , $date);
    header("Refresh:0, url=reviewer.php");
}else if($account == $authorid && $password == $authorpass){
    $_SESSION["check"] = "Yes";
    setcookie("acc", $email , $date);
    header("Refresh:0, url=author.php");
}else{
    $_SESSION["check"] = "No";
    echo "<div class='label' >登入失敗，將回登入畫面</div>";
    header("Refresh:2;url=fail.php");
}
