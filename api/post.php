<?php
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");


header('Access-Control-Allow-Origin: *');


 


// Process the data
//$name = $data['name'];
//$email = $data['email'];
  
 
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "vue_bd"; 
$id = '';

$con = mysqli_connect($host, $user, $password,$dbname);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

else{

}
 

$name = $_GET['name'];
$email = $_GET['email'];
$password = md5($_GET['password']);
$comment = $_GET['comment'];
$status = $_GET['status'];
 
// $method = $_SERVER['REQUEST_METHOD'];
// echo $method;die;
// $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
//$input = json_decode(file_get_contents('php://input'),true);

$sql = "insert into contacts (name, email, password, comment, status) values ('$name', '$email', '$password', '$comment', '$status')"; 

// run SQL statement
$result = mysqli_query($con,$sql);

// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error($con));
}
die;

switch ($method) {
    case 'GET':
      $id = $_GET['id'];
      $sql = "select * from contacts".($id?" where id=$id":''); 
      break;
    case 'POST':
      $name = $_POST["name"];
      $email = $_POST["email"];
      $country = $_POST["country"];
      $city = $_POST["city"];
      $job = $_POST["job"];

      $sql = "insert into contacts (name, email, city, country, job) values ('$name', '$email', '$city', '$country', '$job')"; 
      break;
}

// run SQL statement
$result = mysqli_query($con,$sql);

// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error($con));
}

if ($method == 'GET') {
    if (!$id) echo '[';
    for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
      echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$id) echo ']';
  } elseif ($method == 'POST') {
    echo json_encode($result);
  } else {
    echo mysqli_affected_rows($con);
  }

$con->close();