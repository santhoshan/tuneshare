<?php session_start(); 
// destroy session 
session_destroy(); 
// assign null value to varibles
$_SESSION['fname'] = null; 
$_SESSION['lname'] = null;
$_SESSION['email'] = null; 
header('location:index.php'); 
?>