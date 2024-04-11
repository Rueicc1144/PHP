<?php

session_start();

$_SESSION["check"]="No";
header("location:party_login.php");