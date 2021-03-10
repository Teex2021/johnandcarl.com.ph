<?php
	session_start();
	if (isset($_SESSION['LoginUser'])) {
		header('location:dashboard');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <link rel="stylesheet" href="assets/css/create_account_style.css">

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

</head>

<body>

    <div class="container-fluid background_containter">
        <div class="row">
            <div class="col-md-12 text-success" id="signup_msg">

            </div>
        </div>
        <h6 class="header text-center">CREATE ACCOUNT</h6>
        <div class="login_auth">
            <form method="post" class="sign-in-form">
                <label for="user_type">User type:</label>&nbsp;
                <select name="user_type" id="user_type" name="user_type">
                    <option value="administrator">administrator</option>
                    <option value="user">user</option>
                </select>

                <br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required><br>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                    required><br>
                <div class="form-group">
                    <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                            required><br>
                        <div class="input-group-append">
                        <a href=""><div class="input-group-text"><i class="bi bi-eye-fill"></i></div></a>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary btn_submit" id="create_btn">Create Account</button>

                <small><a href="login">Login?</a></small>
            </form>
        </div>
    </div>

    <!-- jquery plugin -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- local js -->
    <script src="assets/js/action.js" type="text/javascript"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bi-eye-slash-fill");
                $('#show_hide_password i').removeClass("bi-eye-fill");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                $('#show_hide_password i').addClass("bi-eye-fill");
            }
        });
    });
    </script>

</body>

</html>