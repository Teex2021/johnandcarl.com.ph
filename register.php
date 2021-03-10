<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<link rel="stylesheet" href="css/sweetalert2.min.css">
<script src="js/sweetalert2.all.min.js"></script>
<?php

// Include Database Connection
include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$copassword = $_POST['copassword'];
$address1 = $_POST["address1"];

$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";
 
  // check all the field if blank
    if(empty($f_name) || empty($l_name) || empty($email)|| empty($password)|| empty($copassword)|| empty($address1))
    {
        echo " 
        <script>
        Swal.fire({
          text: 'All fields are required!',
          icon: 'info',
          confirmButtonText: 'Cool'
        })
        </script>
        ";
    
    }else if(!preg_match($emailValidation,$email)){

      echo " 
      <script>
      Swal.fire({
        text: 'Your email is invalid!',
        icon: 'info',
        confirmButtonText: 'Cool'
      })
      </script>
      ";
    // validate password strength
    }else if(strlen($password) < 9){


        
    }else if(!preg_match($number,$mobile)){

        
    }else if(!(strlen($mobile) == 11)){
     
    }else if($password != $copassword){

    }else
    {
      // Existing email address in our database
      $sql = "SELECT user_id FROM tbluser_info WHERE email = '$email' LIMIT 1";
      $check_query = mysqli_query($con,$sql);
      $count_email = mysqli_num_rows($check_query);

      if($count_email > 0){
             
      }else{
        $password = md5($password);
          $sql = "INSERT INTO `tbluser_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address 1`) 
          VALUES (NULL, '$f_name', '$l_name', '$email', '$password', '$mobile', '$address1')";

          $run_query = mysqli_query($con,$sql);

          if($run_query)
          {
            echo "<script>alert('Welcome to Geeks for Geeks')</script>";
          }
      }
    }



?>

</body>
</html>