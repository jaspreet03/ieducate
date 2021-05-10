<?php
session_start();
if(isset($_SESSION['user'])){
  header("Location:index.php");  
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="icon" href="img/streamyfinal.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/ccf9756b8c.js"
      crossorigin="anonymous"
    ></script>
    
  
    
  
  </head>
  <body>
    
  
    
      
<div class=" container   ">


<div class="panel">
      <div class="panel-heading">
     
          <div class="btn-group">
            <button type="button" id="signinbutton" class="btn btn-primary btn-block border-3 border-info">SIGN IN</button>
            <button type="button" id="signupbutton"  class="btn btn-primary btn-block  border-3 border-info">SIGN UP</button>
          </div>
         
       </div>
      <div class="panel-body bg-primary">



            <!-- login form --------->
    <form id="login" action="login.php" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control border-left-10 border-info" id="email" name="email" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"> 
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control border-left-10 border-info" id="pwd" name="pwd" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="rememberme" > Remember me</label>
  </div>
  <br>
  <button type="submit" name="submit" class="btn btn-info">Submit</button>
</form>






<!------------signup form-------------->
    <?php

include("validate.php");
?>
  <form class="signup-form" id="validate"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    
    <span class="error"> <?php echo $emailErr;?></span>
    <div class="form-group">
<label for="email">Email address:</label>
<input type="text" class="form-control" id="email" name="email">
</div>
    <span class="error"><?php echo $pwdErr;?></span>
    <div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="form-control" id="pwd" name="pwd">
</div>
<br>
<button type="submit" name="submit" class="btn btn-info">Sign Up</button>
    
  </form>

  <?php
   include("register.php");
  ?>




      </div>
</div>


<br>
<br>
<br>




    






    
  </div>
      

   
<script>
  $(document).ready(function() {
    $("#validate").hide();
  $("#signinbutton").click(function() {
    $("#login").show();
    $("#validate").hide();
  }),
  $("#signupbutton").click(function() {
    
    $("#validate").show();
    $("#login").hide();

  
    
  });

});
</script>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



  </body>
</html>


  
  