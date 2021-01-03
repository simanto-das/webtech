<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abcd";
header('Content-Type: application/json');

$name = $_GET['name'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products where product_name like '%".$name . "%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
// $json_array = json_decode($result);
// $json_wave = implode(',', $json_array->data);
// var_dump($json_wave);

	while($row = $result->fetch_assoc()) {

		$myJSON = json_encode($row);

echo $myJSON;
    
  }

	
} else {
  echo "0 results";
}
$conn->close();
?>