<?php
header('Access-Control-Allow-Origin: *');  
  
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "vue_bd"; 
$id = '';

$con = mysqli_connect($host, $user, $password,$dbname);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "select * from contacts";
$result = mysqli_query($con,$sql);

//$result = mysqli_fetch_object($result);

$techarray = array();
while($row =mysqli_fetch_assoc($result)){
    $techarray[] = $row;
}

//print_r(json_encode($techarray));die;
echo json_encode($techarray);
