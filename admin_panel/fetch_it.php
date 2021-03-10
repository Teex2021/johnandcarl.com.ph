<?php
// connect database
$connect = mysqli_connect("localhost", "root", "", "dbjandc");

// store product in array
$columns = array('product_id','product_title','product_price','product_desc','product_image');

$query = "SELECT * FROM tblproduct";

// if user is searching show search data
if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE product_title LIKE "%'.$_POST["search"]["value"].'%" 
 or product_desc LIKE "%'.$_POST["search"]["value"].'%"
 or product_price LIKE "%'.$_POST["search"]["value"].'%"
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
 $query .= 'ORDER BY product_id ASC ';
}

$query1 = '';

// if leng of table is not equal to negative one proceed to limit the table data to 10 per page
if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

//  display table data and set to be editable columns
while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["product_id"].'">' . $row["product_id"] . '</div> ';
 $sub_array[] = '<div class="update" data-id="'.$row["product_id"].'">' . $row["product_title"] . '</div> ';
 $sub_array[] = '<div class="update" data-id="'.$row["product_id"].'">' . $row["product_desc"] . '</div> ';
 $sub_array[] = '<div class="update" data-id="'.$row["product_id"].'">' . $row["product_price"] . '</div> '; 
 $sub_array[] = '<img class="product_image" src="data:image;base64,'.base64_encode($row['product_image']).'" alt="image">';
 $sub_array[] = '
 <div class="action_btns">
 <button type="button" name="edit" class="btn btn-success btn-xs edit_data" id="'.$row["product_id"].'"><i class="bx bx-edit-alt"></i></button>&nbsp;
 <button type="button" name="view" class="btn btn-primary btn-xs view_data" id="'.$row["product_id"].'"><i class="bx bx-window-open"></i></button>&nbsp;
 <button type="button" name="delete" class="btn btn-danger btn-xs delete_data" id="'.$row["product_id"].'"><i class="bx bxs-trash" ></i></button>
 </div>';  

 $data[] = $sub_array;
}

// get all data from tbl_employee for filter
function get_all_data($connect)
{
 $query = "SELECT * FROM tblproduct";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

// output the data to index.php product_table
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>