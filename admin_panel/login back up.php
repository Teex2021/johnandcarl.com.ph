<?php
	session_start();
	if (isset($_SESSION['LoginUser'])) {
		header('location:dashboard.php');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminstration Login</title>

    <link rel="stylesheet" href="assets/css/login_style1.css">

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
        <h6 class="header text-center">LOGIN FORM</h6>
        <div class="login_auth">

            <div class="card form-box" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="user" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Password">
                        </div>
                        <button type="button" onclick="submitMyForm();" class="btn btn-primary">Submit</button>
                        <div class="spinner-border text-primary" id="loader" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <form action="" class="sign-in-form">
                <label for="user_type">User type:</label>&nbsp;
                <select name="user_type" id="user_type" name="user_type">
                    <option value="administrator">administrator</option>
                    <option value="user">user</option>
                </select>


                <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                    required><br>
                <div class="form-group">
                    <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control" id="userpassword" name="userpassword"
                            placeholder="Password" required><br>
                        <div class="input-group-append">
                            <a href="">
                                <div class="input-group-text"><i class="bi bi-eye-fill"></i></div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <small class="form-check-label" for="gridCheck1">
                        Remember me
                    </small>
                </div>
                <small><a href="#">Forgot password?</a></small>
                <br>
                <br>
                <input type="submit" class="btn btn-success btn_submit" id="login" value="Login"><br>
                <small><a href="create_account">Create an account?</a></small>
            </form> -->
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

    <script type="text/javascript">
    $('#loader').hide();

    function submitMyForm() {

        if ($('#user').val() == '') {
            alert("Invalid Username");
        } else if ($('#pwd').val() == '') {
            alert("Invalid Password");
        } else {
            //alert("Done");
            $('#loader').show();

            var us = $('#user').val();
            var pw = $('#pwd').val();

            $.post("ajaxLogin.php", {
                'user': us,
                'pwd': pw
            }, function(data, status) {
                console.log(data);
                var myData = JSON.parse(data);

                $('#loader').hide();

                if (myData['status'] == '1') {
                    location.reload();
                } else {
                    alert(myData['msg']);
                }
            })

        }
    }
    </script>
</body>

</html>