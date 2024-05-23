<?php
session_start();
if(!isset($_SESSION["Full_Name"])){
header("Location: login.php");
exit(); }
?>