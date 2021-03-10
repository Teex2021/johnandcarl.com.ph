<?php

//setting header to json
header('Content-Type: application/json');

define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbjandc');

$mysqli = new mysqli("localhost", "root", "", "dbjandc");  

if(!$mysqli){
    die("Connection Failed!" . $mysqli->error);
}

$query = sprintf("SELECT available_stock,product_desc  FROM tblproduct ORDER BY product_id");

$result = $mysqli->query($query);

$data = array();
foreach ($result as $row){
    $data[] = $row;
}

$result->close();

$mysqli->close();

print json_encode($data);


?>