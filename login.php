<?php

include("config.php");

if(isset($_POST['submit'])){


$email1=$_POST['email'];
$pwd1=$_POST['pwd'];


$query="SELECT * FROM login WHERE email = '$email1'";
$qq=mysqli_query($con,$query);
if($qq){
   $row=mysqli_fetch_assoc($qq);
 
   if($row['password'] === $pwd1){

    session_start();

   $_SESSION["user"]=$email1;
    //setcookie("login","1",time()+3600);

    if(isset($_POST['rememberme'])){
    setcookie('username',$_POST['email'],time()+3600*24*7);
    setcookie('password',$_POST['pwd'],time()+3600*24*7);
    }
   


    header('Location:index.php');

   }else {
      
       header('Location:loginpage.php');
   }

}

}
?>