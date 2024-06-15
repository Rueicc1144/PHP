<?php

session_start();

$_SESSION["check"]="No";
header("location:login.php");