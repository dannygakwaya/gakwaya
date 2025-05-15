<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
header("location:login.php");
include("connection.php");
session_destroy();
 ?>