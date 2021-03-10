<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <?php

// Include Database Connection
include "../db.php";

$user_t = $_POST['user_type'];
$f_name = $_POST['name'];
$user_name = $_POST['username'];
$password = $_POST['password'];

$name = "/^[A-Z][a-zA-Z ]+$/";

  // check all the field if blank
    if(empty($f_name) || empty($user_name) || empty($password)|| empty($co_password)|| empty($user_t))
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
    
    // validate password strength
    }else if(strlen($password) < 9)
    {
      echo " 
      <script>
      Swal.fire({
        text: 'Make your password strong',
        icon: 'info',
        confirmButtonText: 'Cool'
      })
      </script>
      ";
    }else
    {
      // Existing email address in our database
      $sql = "SELECT id FROM tbl_administrator WHERE username = '$user_name' LIMIT 1";
      $check_query = mysqli_query($con,$sql);
      $count_email = mysqli_num_rows($check_query);

      if($count_email > 0){
          echo "<script>alert('Username has already been taken, Please choose another!')</script>";
      }else{
          $password = md5($password);
          $sql = "INSERT INTO `tbl_administrator` (`id`, `name`,`username`,`password`,`user_type`) 
          VALUES (NULL, '$f_name', '$user_name', '$password','$user_t')";

          $run_query = mysqli_query($con,$sql);

          if($run_query)
          {
            echo "<script>alert('Registration Successful!')
            window.location.href = 'login';
            </script>";
            
          }
      }
    }



?>

</body>

</html>