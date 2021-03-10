<?php
// connect database
include "../db.php";

// store product in array
$columns = array('product_title', 'product_desc', 'product_price');

$query = "SELECT * FROM tblproduct ";

// if user is searching show search data
if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE product_title LIKE "%'.$_POST["search"]["value"].'%" 
 OR product_desc LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

// if order is clicked re-order the table column selected
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY product_id DESC ';
}

$query1 = '';

// if leng of table is not equal to negative one proceed to limit the table data to 10 per page
if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($con, $query));

$result = mysqli_query($con, $query . $query1);

$data = array();

//  display table data and set to be editable columns
while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["product_id"].'" data-column="product_title">' . $row["product_title"] . '</div> ';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["product_id"].'" data-column="product_desc">' . $row["product_desc"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["product_id"].'" data-column="product_price">' . $row["product_price"] . '</div>'; 
 $sub_array[] = '<button type="button" name="delete" class="btn btn-outline-danger btn-xs delete" id="'.$row["product_id"].'"><i class="bx bxs-trash" ></i>&nbsp;Delete</button>'; 
 $sub_array[] = '<button type="button" name="edit" class="btn btn-outline-primary btn-xs edit_table_data" id="'.$row["product_id"].'"><i class="bx bx-edit-alt"></i>&nbsp;Edit</button>';
 $data[] = $sub_array;
}

// get all data from tblproduct for filter
function get_all_data($con)
{
 $query = "SELECT * FROM tblproduct";
 $result = mysqli_query($con, $query);
 return mysqli_num_rows($result);
}

// output the data to index.php product_table
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($con),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>