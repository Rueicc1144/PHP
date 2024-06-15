<?php
ob_start();
session_start();
?>

<meta charset="utf-8">
<?php
$sId="馬卡巴卡";
$sPwd="123";

$uId=$_GET["uId"];
$uPwd=$_GET["uPwd"];

if($sId==$uId && $sPwd==$uPwd){
    $_SESSION["check"]="Yes";
    $_SESSION["Name"]=$sId;
    header("Location:success.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
ob_flush();
?>