<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="pagination_design.php">
</head>

<body>

<div id="output"></div>

<button onclick="view_save_data();">Click me</button>

<script>


    function view_save_data(){
        
    // alert("sample alert");
    
    document.getElementById('output').innerHTML = JSON.parse(localStorage.getItem('data'));
    
    }

</script>


</body>

</html>



<?php 

if(isset($_POST['page'])){ 

    // Include pagination library file 
    include_once '../pagination.class.php'; 
     
    // Include database configuration file 
    require_once '../db.php'; 
     
    // Set some useful configuration 
    $baseURL = 'get_products/search_with_pag.php'; 
    $offset = !empty($_POST['page'])?$_POST['page']:0; 
    $limit = 3; 

    // $keyword = $_POST["keyword"];
    
    // Count of all records 
    $query   = $con->query("SELECT COUNT(*) as rowNum FROM tblproduct "); 
    $result  = $query->fetch_assoc(); 
    $rowCount= $result['rowNum']; 
     
    // Initialize pagination class 
    $pagConfig = array( 
        'baseURL' => $baseURL, 
        'totalRows' => $rowCount, 
        'perPage' => $limit, 
        'currentPage' => $offset, 
        'contentDiv' => 'postContent' 
    ); 
    $pagination =  new Pagination($pagConfig); 
     
    $sql = "SELECT * FROM tblproduct ORDER BY product_id DESC LIMIT $limit ";
     
    if($query->num_rows > 0)
    {         
    ?>

<?php while($row = $query->fetch_assoc()){ 
                            $pro_id = $row['product_id'];            
                            $pro_desc = $row['product_desc'];
                            $pro_price = $row['product_price'];
                            $pro_image = $row['product_image'];

                            $pro_money = number_format($pro_price);
        ?>
<?php 
                echo 
                "
                <div class='slider-box post'>
                <p class='time'></p>
                <div class='img-box'>
                    <img class='img-fluid' src='image/$pro_image' style='width: 170px;'>
                </div> 
                    <br>
                    <small class='text-primary'>$pro_desc</small> 
                    <div class='row mx-auto action_btns'>
                                              
                        <div class='col-md-4'>

                            <button class='btn qv_btn rounded-circle' qvid='$pro_id' id='quick_view' data-toggle='modal' data-target='#pop1'>
                                <i class='bi bi-eye-fill' data-toggle='tooltip' data-placement='top' title='Quick View'></i>
                            </button>                                     
                        </div>
                        <div class='col-md-4'>                                            
                            <button pid='$pro_id' class='btn ac_btn rounded-circle'' id='product' data-toggle='tooltip' data-placement='top' title='Add to cart'>
                                <i class='bi bi-bag '></i>
                            </button>
                        </div>
                        <div class='col-md-4'>                                       
                            <button class='btn aw_btn rounded-circle' id='heart' data-toggle='tooltip' data-placement='top' title='Add to Wishlist'>
                                <i class='bi bi-suit-heart-fill '></i>
                            </button>
                        </div>                                            
                    </div>                                
                    <div class='back-drop'></div>
            </div>
                ";
            ?>

<?php } ?>
</div>
</div>
<!-- Display pagination links -->

<div class="container-fluid all_pag_container pb-3">
    <div class="container pag_container d-flex justify-content-center">
        <div id="pagination_design">
            <?php      
                                    echo $pagination->createLinks();
                                ?>
        </div>
    </div>
</div>
</div>
<?php 
    }     
}
?>