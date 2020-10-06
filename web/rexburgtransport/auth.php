<?php
session_start();

//check if already logged in if not redirect to the login page.
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>