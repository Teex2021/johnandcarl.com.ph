$(document).ready(function() 
{

  // // User Login
  // $("#login").click(function(event) {
  //   event.preventDefault();

  //   var email = $("#username").val();
  //   var pass = $("#userpassword").val();

  //   $.ajax({
  //     url: "../actionlogin.php",
  //     method: "POST",
  //     data: {userLogin:1,useremail:email,userpassword:pass},
  //     success: function(data){

  //       if(data == "user"){

  //         window.location.href = "dashboard.php";
  //         // alert(data);
  //       }        
  //     }
  //   });

  // });

  // User Sign Up
  $("#create_btn").click(function(event) {
    event.preventDefault();
    $.ajax({
      url: "register.php",
      method: "POST",
      data: $("form").serialize(),
      success: function(data){
        $("#signup_msg").html(data);
      }
    });

  });  

});