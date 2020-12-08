
<?php

$conn =  mysqli_connect("localhost","crud","123456","crudoperation");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
