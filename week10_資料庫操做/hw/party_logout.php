<?php

session_start();
setcookie("Acc", time()-604800);
$_SESSION["check"]="No";
header("location:party_login.php");