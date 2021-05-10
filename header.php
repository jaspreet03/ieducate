<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location:loginpage.php"); 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/responsive1.css">
  <link rel="icon" href="img/education.jpg">
  

  <title>iEducate-Transforming lives Through Education</title>
</head>
