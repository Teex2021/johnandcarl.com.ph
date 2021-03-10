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
    <link rel="stylesheet" href="assets/css/style.css">

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

        <div class="header__img">
            <img src="assets/img/perfil.jpg" alt="">
        </div>
    </header>

    <!-- sidebar navigation -->
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>

                <div class="nav__list">
                    <a href="dashboard.php" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="#" class="nav__link active">
                        <i class='bx bx-folder nav__icon'></i>
                        <span class="nav__name">Products</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bxs-shopping-bag'></i>
                        <span class="nav__name">Orders</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Manage Accounts</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                        <span class="nav__name">Analytics</span>
                    </a>
                </div>
            </div>

            <a href="#" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <!-- form to update and edit -->
    <div class="row update_and_edit_form">
        <div class="col-md-4 border border-primary">
            <form method="post" id="insert_form">

                <label>Product Name</label>
                <input type="text" class="form-control" name="name" id="name">

                <label>Product Description</label>
                <input type="text" class="form-control" name="description" id="description">

                <label>Product Price</label>
                <input type="text" class="form-control" name="price" id="price"><br>

                <input type="hidden" name="product_id" id="product_id" />
                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

            </form>
        </div>
    </div>

    <!-- all products showned here -->
    <div class="row">
        <div class="col-md-12 pt-5">
            <!-- <button type="button" name="add_button" id="add_button" class="btn btn-info">Add Product</button> -->
            <div id="alert_message"></div>
            <table id="product_table" class="table table-bordered">
                <thead>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Product Price</th>
                    <th></th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>

    <!-- main js -->
    <script src="assets/js/main.js"></script>

    <!-- show and hide modal -->
    <script>
    $(document).ready(function() {
        $('#add_button').click(function() {
            $('.multi_pop_wrap').fadeIn("fast");
            $('.multi_pop_wrap').css("display", "block");
        });
        $('.close').click(function() {
            $('.multi_pop_wrap').css("display", "none");
        });
    });
    </script>


    <!-- server side processing script for CRUD operation -->
    <script type="text/javascript" language="javascript">
    $(document).ready(function() {

        fetch_data();

        function fetch_data() {
            var dataTable = $('#product_table').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "fetch.php",
                    type: "POST"
                }
            });
        }

        // inline update of product_table row
        // function update_data(id, column_name, value) {
        //     $.ajax({
        //         url: "update.php",
        //         method: "POST",
        //         data: {
        //             id: id,
        //             column_name: column_name,
        //             value: value
        //         },
        //         success: function(data) {
        //             $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
        //             $('#product_table').DataTable().destroy();
        //             fetch_data();
        //         }
        //     });
        //     setInterval(function() {
        //         $('#alert_message').html('');
        //     }, 5000);
        // }

        // update when not in column focus 
        // $(document).on('blur', '.update', function() {
        //     var id = $(this).data("id");
        //     var column_name = $(this).data("column");
        //     var value = $(this).text();
        //     update_data(id, column_name, value);
        // });

        // add blank row in product_table row
        // $('#add_button').click(function() {
        //     var html = '<tr>';
        //     html += '<td contenteditable id="data1"></td>';
        //     html += '<td contenteditable id="data2"></td>';
        //     html += '<td contenteditable id="data3"></td>';
        //     html +=
        //         '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs"><i class="bi bi-box-arrow-in-right"></i>&nbsp;Insert</button></td>';
        //     html += '</tr>';
        //     $('#product_table tbody').prepend(html);
        // });

        // insert data in product_table row
        // $(document).on('click', '#insert', function() {
        //     var product_title = $('#data1').text();
        //     var product_desc = $('#data2').text();
        //     var product_price = $('#data3').text();
        //     if (product_title != '' && product_desc != '' && product_price != '') {
        //         $.ajax({
        //             url: "insert.php",
        //             method: "POST",
        //             data: {
        //                 product_title: product_title,
        //                 product_desc: product_desc,
        //                 product_price: product_price
        //             },
        //             success: function(data) {
        //                 $('#alert_message').html('<div class="alert alert-success">' +
        //                     data + '</div>');
        //                 $('#product_table').DataTable().destroy();
        //                 fetch_data();
        //             }
        //         });
        //         setInterval(function() {
        //             $('#alert_message').html('');
        //         }, 5000);
        //     } else {
        //         alert("Both Fields is required");
        //     }
        // });

        //  delete row of product_table
        $(document).on('click', '.delete', function() {

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

        // send data to form in able to edit and update it
        $(document).on('click', '.edit_table_data', function() {

            var product_id = $(this).attr("id");


            // alert(product_id);
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: {
                    product_id: product_id
                },
                dataType: "json",
                success: function(data) {
                    $('#product_id').val(data.product_id);
                    $('#name').val(data.product_title);
                    $('#description').val(data.product_desc);
                    $('#price').val(data.product_price);
                    $('#insert').val("Update");
                }
            });
        });

        //  insert or update the form 
        // $('#update_form').on("submit", function(event) {
        //     event.preventDefault();
        //     if ($('#name').val() == "") {
        //         alert("Product Name is required");
        //     } else if ($('#description').val() == '') {
        //         alert("Description is required");
        //     } else if ($('#price').val() == '') {
        //         alert("Price is required");
        //     } else {
        //         $.ajax({
        //             url: "insert.php",
        //             method: "POST",
        //             data: $('#update_form').serialize(),
        //             beforeSend: function() {
        //                 $('#insert').val("Inserting...");
        //             },
        //             success: function(data) {
        //                 $('#update_form')[0].reset();
        //                 $('#product_table').html(data);
        //             }
        //         });
        //     }
        // });

        $('#insert_form').on("submit", function(event) {
            event.preventDefault();
            if ($('#name').val() == "") {
                alert("name is required");
            } else if ($('#description').val() == '') {
                alert("description is required");
            } else if ($('#price').val() == '') {
                alert("price is required");
            } else {
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: $('#insert_form').serialize(),
                    beforeSend: function() {
                        $('#insert').val("Inserting");
                    },
                    success: function(data) {
                        $('#insert').val("Insert");
                        $('#insert_form')[0].reset();
                        $('#product_table').DataTable().destroy();
                        fetch_data();
                    }
                });
            }
        });

        // insert data in product_table row
        // $(document).on('click', '#insert', function(event) {
        //     event.preventDefault();
        //     var product_title = $('#name').text();
        //     var product_desc = $('#description').text();
        //     var product_price = $('#price').text();

        //     if ($('#name').val() == "") {
        //         alert("Product Name is required");
        //     } else if ($('#description').val() == '') {
        //         alert("Description is required");
        //     } else if ($('#price').val() == '') {
        //         alert("Price is required");
        //     } else {

        //         if (product_title != '' && product_desc != '' && product_price != '') {
        //             $.ajax({
        //                 url: "insert.php",
        //                 method: "POST",
        //                 data: {                            
        //                     product_title: product_title,
        //                     product_desc: product_desc,
        //                     product_price: product_price
        //                 },
        //                 success: function(data) {
        //                     $('#alert_message').html('<div class="alert alert-success">' +
        //                         data + '</div>');
        //                     $('#product_table').DataTable().destroy();
        //                     fetch_data();
        //                 }
        //             });
        //             setInterval(function() {
        //                 $('#alert_message').html('');
        //             }, 5000);
        //         }
        //     }
        // });


        //  end of script    
    });
    </script>
</body>

</html>