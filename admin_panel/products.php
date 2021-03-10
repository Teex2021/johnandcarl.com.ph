<?php
	session_start();
	if (!isset($_SESSION['LoginUser'])) {
		header('location:login');
	}
	if (isset($_GET['type']) && ($_GET['type']=='logout')) {
		if (session_destroy()) {
			header('location:login');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- boostrap icons cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/style1.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- datatable library -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <!-- boostrap library cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <title>Administrator Panel</title>
</head>

<body id="body-pd">

    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>


        <a href="#" class="nav__link_separated">
            <i class='bx bx-user nav__icon'></i>
            <span class="nav__name"><?=$_SESSION['LoginUser'];?></span>
        </a>
    </header>

    <!-- sidebar navigation -->
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>

                <div class="nav__list">
                    <a href="dashboard" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="products" class="nav__link active">
                        <i class='bx bx-folder nav__icon'></i>
                        <span class="nav__name">Products</span>
                    </a>

                    <a href="orders" class="nav__link">
                        <i class='bx bxs-shopping-bag nav__icon'></i>
                        <span class="nav__name">Orders</span>
                    </a>

                    <a href="manage_account" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Manage Accounts</span>
                    </a>

                    <a href="analytics" class="nav__link">
                        <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                        <span class="nav__name">Analytics</span>
                    </a>
                </div>
            </div>

            <a href="products?type=logout" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <!-- modal for viewing of data -->
    <div id="dataModal">

        <div class="container_popup_view">
            <button type="button" class="btn close_view">&times;</button>
            <h4>Product Details</h4>
            <div id="product_details">
            </div>
        </div>
    </div>
    <!-- end of modal for viewing of data -->

    <div id="add_data_Modal">
        <div class="container_popup_add_edit">
            <button type="button" class="btn close_add_edit">&times;</button>
            <hr>
            <h5 class="text-center head_text"></h5>
            <hr>
            <div>
                <form method="post" id="insert_form" enctype="multipart/form-data">
                    <label>Product Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                    <br />
                    <label>Product Description </label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                    <br />
                    <label>Price</label>
                    <input type="text" name="price" id="price" class="form-control" />
                    <br />
                    <input type="file" name="image" id="image">
                    <br>
                    <input type="hidden" name="product_id" id="product_id" />
                    <br>
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                    <button type="button" class="btn btn-default">Close</button>
                </form>
            </div>
        </div>
    </div>

    <br /><br />
    <div class="container">

        <div class="table-responsive">
            <div align="right">
                <button type="button" name="add" id="add" class="btn btn-warning">Add</button>
            </div>
            <br />
            <label id="alert_message"></label>
            <table id="product_table" class="table table-bordered">
                <thead>
                    <th width="5%">Id</th>
                    <th width="20%">Product Name</th>
                    <th width="20%">Description</th>
                    <th width="20%">Price</th>
                    <th width="30%">Image</th>
                    <th width="5%">Action</th>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
    </div>

    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>

<!-- main js -->
<script src="assets/js/main.js"></script>

<script type="text/javascript" language="javascript">
$(document).ready(function() {

    fetch_data();

    function fetch_data() {
        var dataTable = $('#product_table').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "fetch_it.php",
                type: "POST"
            }
        });
    }

    $(document).ready(function() {
        $('#product_table').DataTable();
    });

    var view_data = document.getElementById("dataModal");
    var add_edit_data = document.getElementById("add_data_Modal");

    $('.close_view').click(function() {
        view_data.style.display = "none";
    });

    $('.close_add_edit').click(function() {
        add_edit_data.style.display = "none";
    });

    $('.btn-default').click(function() {
        add_edit_data.style.display = "none";
    });

    // $('#insert').click(function() {
    //     add_edit_data.style.display = "none";
    // });

    $('#add').click(function() {
        $('.head_text').text("Add Product");
        add_edit_data.style.display = "block";
    });

    $('#add').click(function() {
        $('#insert').val("Insert");
        $('#insert_form')[0].reset();
    });


    $(document).on('click', '.edit_data', function() {
        var product_id = $(this).attr("id");
        $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
                product_id: product_id
            },
            dataType: "json",
            success: function(data) {
                $('#name').val(data.product_title);
                $('#description').val(data.product_desc);
                $('#price').val(data.product_price);
                $('#product_id').val(data.product_id);
                $('#insert').val("Update");
                $('.head_text').text("Update Product");
                add_edit_data.style.display = "block";
            }
        });
    });

    $('#insert_form').on("submit", function(event) {
        event.preventDefault();

        var image_name = $('#image').val();
        var img = document.forms['insert_form']['image'];

        if ($('#name').val() == "") {
            alert("name is required");
        } else if ($('#description').val() == '') {
            alert("description is required");
        } else if ($('#price').val() == '') {
            alert("price is required");
        } else {

            if (image_name == '') {
                alert("Please select image!");
                return false;
            } else {

                var extension = $('#image').val().split('.').pop().toLowerCase();

                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Image selected invalid!");
                    $('#image').val('');
                    return false;
                } else if (parseFloat(img.files[0].size / (1024 * 1024)) >= 1) {
                    alert("Files size must be lower than 1MB, Current files size: " + parseFloat(img
                        .files[0].size / (1024 * 1024)) + "MB");
                    $('#image').val('');
                    return false;
                } else {
                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $('#insert').val("Inserting");
                        },
                        success: function(data) {
                            $('#insert_form')[0].reset();
                            // $('#add_data_Modal').modal('hide');
                            $('#alert_message').html(
                                '<div class="alert alert-success">Data Updated</div>');
                            $('#product_table').DataTable().destroy();
                            fetch_data();
                            $('#insert').val("Insert");
                            // add_edit_data.style.display = "none";
                        }
                    });
                    setInterval(function() {
                        $('#alert_message').html('');
                    }, 2000);
                }
            }
        }
    });
    $(document).on('click', '.view_data', function() {
        var product_id = $(this).attr("id");

        if (product_id != '') {
            $.ajax({
                url: "select.php",
                method: "POST",
                data: {
                    product_id: product_id
                },
                success: function(data) {
                    $('#product_details').html(data);
                    view_data.style.display = "block";
                }
            });
        }
    });

    //  delete row of product_table
    $(document).on('click', '.delete_data', function() {

        var product_id = $(this).attr("id");

        if (confirm("Are you sure you want to remove this?")) {
            $.ajax({
                url: "delete.php",
                method: "POST",
                data: {
                    product_id: product_id
                },
                success: function(data) {
                    $('#alert_message').html('<div class="alert alert-success">' +
                        data + '</div>');
                    $('#product_table').DataTable().destroy();
                    fetch_data();
                }
            });
            setInterval(function() {
                $('#alert_message').html('');
            }, 5000);
        }
    });

});
</script>