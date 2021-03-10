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
    <link rel="stylesheet" href="assets/css/chart_design.css">

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

    <script type="text/javascript" src="assets/js/Chart.min.js"></script>
    <script type="text/javascript" src="assets/js/chart.js"></script>

    <title>Sidebar menu responsive</title>
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

                    <a href="products" class="nav__link">
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

                    <a href="analytics" class="nav__link active">
                        <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                        <span class="nav__name">Analytics</span>
                    </a>
                </div>
            </div>

            <a href="analytics?type=logout" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <div class="row pt-5">
        <div class="col-md-12 pt-5">
            <div id="chart-container">
                <h6 class="text-center p-2">Product Overview</h6>
                <canvas id="my_canvas"></canvas>
            </div>
        </div>
    </div>

    <!-- main js -->
    <script type="text/javascript" src="assets/js/main.js"></script>


</body>

</html>


<!-- <div class="multi_pop_wrap">
    <div id="userModal">
        <form method="post" id="course_form" enctype="multipart/form-data">
            <div class="">
                <div class="">
                    <button type="button" class="close">&times;</button>
                    <h4 class="">Add Course</h4>

                </div>
                <div class="">
                    <label for="">Enter Course Name</label>
                    <input type="text" name="course" id="course" class="form-control"><br>
                    <label for="">Enter Number of Student</label>
                    <input type="text" name="students" id="students" class="form-control"><br>
                </div>
                <div class="">
                    <input type="hidden" name="course_id" id="course_id">
                    <input type="hidden" name="operation" id="operation">
                    <input type="submit" name="action" id="action" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div> -->