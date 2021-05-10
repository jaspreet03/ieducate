<?php  
// define variables to empty values  
 $emailErr = $pwdErr = "";  
 $email = $pwd = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
 
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = input_data($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }


      if (empty($_POST["pwd"])) {  
        $pwdErr = "Password can't be left blank";  
   } else {  
       $pwd = input_data($_POST["pwd"]);  





}
}
    
    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
      }

    ?>