<?php
	session_start();
	if (isset($_SESSION['LoginUser'])) {
		header('location:dashboard');
	}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="auth.css">
    <link rel="stylesheet" href="assets/css/login_style1.css">
</head>

<body>
    <div class="container-fluid background_containter">
        <h6 class="header text-center">LOGIN FORM</h6>
        <div class="login_auth">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="user" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Password">
                </div>
                <br>

                <button type="button" onclick="submitMyForm();" class="btn btn-primary w-100">Log In</button>                
                <img id="loader" src="../image/pulse.gif" height="50px"; style="position: absolute;">
                <br>
                <br>

                <small><a href="create_account">Create an account?</a></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <small><a href="#">Forgot password?</a></small>
            </form>
        </div>
    </div>

</body>

<script type="text/javascript">
$('#loader').hide();
function submitMyForm() {

    if ($('#user').val() == '') {
        alert("Please enter your username!");
    } else if ($('#pwd').val() == '') {
        alert("Please enter your password!");
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

</html>