$(document).ready(function() 
{
  cat();
  brand();

  // Get Category
  function cat() {

    $.ajax({
      url: "action.php",
      method: "POST",
      data: {
        category: 1
      },
      success: function(data) {
        $("#get_category").html(data);
      }
    })

  }

  // Get Brand
  function brand() {

    $.ajax({
      url: "action.php",
      method: "POST",
      data: {
        brand: 1
      },
      success: function(data) {
        $("#get_brand").html(data);
      }
    })
  }

  // Filter By Brand
  $("body").delegate(".selectBrand", "click", function(event) {
    event.preventDefault();
    var bid = $(this).attr('bid');

    $.ajax({
      url: "action.php",
      method: "POST",
      data: {
        selectBrand: 1,
        brand_id: bid
      },
      success: function(data) {
        $(".get_product").html(data);
      }
    });
  });

  // Search Products
  $("#search_btn").click(function() {

    var keyword = $("#search").val();
    var bread = $("#all_products_text").val();
    
    if (keyword != "") 
    {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: {
          search: 1,
          keyword: keyword
        },
        success: function(data) {
          // $(".get_product").empty();

          // $("#all_products_text").empty();
          $("#postContent").html(data);
        }
      });

    }
  });
  
  // User Sign Up
  $("#signup_button").click(function(event) {
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

  // User Login
  $("#login").click(function(event) {
    event.preventDefault();

    var email = $("#useremail").val();
    var pass = $("#userpassword").val();

    $.ajax({
      url: "actionlogin.php",
      method: "POST",
      data: {userLogin:1,useremail:email,userpassword:pass},
      success: function(data){

        if(data == "user"){

          window.location.href = "profile.php";
          // alert(data);
        }        
      }
    });

  });
  

  // Add To Cart Function
  // $("body").delegate("#product", "click", function(event) {
  //   event.preventDefault();
    
  //   var p_id = $(this).attr('pid');
  //   // alert("WORKING");
  //   $.ajax({
  //     url: "action.php",
  //     method: "POST",
  //     data: {addToProduct:1,proId:p_id},
  //     success: function(data){        
  //       $("#signup_msg").html(data);
  //     }
  //   });

  // }); 


    // show quick view every product
    $("body").delegate("#quick_view", "click", function(event) {
      event.preventDefault();
      
      var qv_id = $(this).attr('qvid');
      // alert("WORKING");
      $.ajax({
        url: "action.php",
        method: "POST",
        data: {show_quick_view:1,quick_id:qv_id},
        success: function(data){        
          $(".modal-body").html(data);
        }
      });
  
    }); 

    // add to cart container
    $("body").delegate("#product", "click", function(event) {
      event.preventDefault();
      
      var p_id = $(this).attr('pid');
      // alert("WORKING");
      $.ajax({
        url: "action.php",
        method: "POST",
        data: {addToProduct:1,proId:p_id},
        success: function(data){        
          $("#signup_msg").html(data);
        }
      });
  
    }); 

  //  show product in cart container
  $("#cart_container").click(function(event){
    event.preventDefault();
    
    $.ajax({
      url: "action.php",
      method: "POST",
      data: {get_cart_product:1},
      success: function(data){
        // alert(data);
        $("#cart_product").html(data);
      }
    });

  });

  // show cart for checkout
  cart_checkout();
  function cart_checkout(){

    $.ajax({
      url: "action.php",
      method: "POST",
      data: {cart_checkout:1},
      success: function(data){

        $("#cart_checkout").html(data);
      }
    });
  }


});


// Contact Us Javascript

  // Email Success
  $("body").delegate("#sendBtn", "click", function(event) {
    event.preventDefault();

    $.ajax({
      url: "contactus.php",
      method: "POST",
      data: {showSuccess:1},
      success: function(data){

        $("#showSuc").html(data);
      }
    });

  }); 
