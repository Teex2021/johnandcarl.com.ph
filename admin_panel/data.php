<?php 

// include database connection
include "../db.php";

// query to select all data from database table
$result = mysqli_query($con, "SELECT * FROM tblproduct ORDER BY product_id DESC");

// add all records in to the array
$rows = array();
while($row = mysqli_fetch_array($result))
{
    $rows[] = $row;    
}

echo json_encode($rows);              

?>