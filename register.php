
<?php 

include("config.php");
if(isset($_POST['submit'])){


if($emailErr==""&&$pwdErr==""){


$email1=$_POST['email'];
$pwd1=$_POST['pwd'];

$query="INSERT INTO login (email,password) VALUES ('$email1','$pwd1')";
$qq=mysqli_query($con,$query);
if($qq){
    
    header('Location:index.php');

}else{
    header('Location:loginpage.php');
}
}
}
?>