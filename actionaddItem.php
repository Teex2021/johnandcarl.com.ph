<?php

include('database_connection.php');


if(isset($_POST['id'])){
  $id = $_POST['id'];
  $prodBrand = $_POST['prodBrand'];
  $prodName = $_POST['prodName'];
  $itemPrice = $_POST['itemPrice'];
  $pqty = 1;

  $stmt = $connect->prepare("SELECT id FROM tblproducts WHERE id=?");
  $stmt->bind_param("s", $id);
  $stmt->execute();
  $res = $stmt->get_result();
  $r = $res->fetch_assoc();
  $code = $r['id'];

  if(!$code){
    $query = $conn->prepare("INSERT INTO tblproducts (product_brand,product_name,product_price) VALUES (?,?,?)");

    $query->bind_param("sssiss", $prodBrand, $prodName, $itemPrice);
    $query->execute();

    echo '
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Iteam added to your cart!</strong>
          </div>
        ';
  }
  else {
    echo '
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Iteam already added to your cart!</strong>
          </div>
        ';
  }
}
 ?>
