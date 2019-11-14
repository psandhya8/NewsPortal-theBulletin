<?php
session_start();
$_SESSION["id"] = '0';
$_SESSION["username"] = '0';
$_SESSION["admin_enable"] = 0;
$_SESSION["login"] = 0;
header("Location:login.php");
?>