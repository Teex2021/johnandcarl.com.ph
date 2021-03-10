<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

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

    <title>Sidebar menu responsive</title>
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
                    <a href="#" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="#" class="nav__link">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-12 pt-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
            <table id="display_data" class="display" cellspacing="0" style="width:100%">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Description</th>
                        <th>Price</th>
                        <th>Edit</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- main js -->
    <script src="assets/js/main.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#display_data').DataTable({
            "ajax": {
                "url": "data.php",
                "dataSrc": ""
            },
            "columns": [

                {
                    "data": "product_title"
                },
                {
                    "data": "product_desc"
                },
                {
                    "data": "product_price"
                }
            ]
        });

    });
    </script>

</body>

</html>