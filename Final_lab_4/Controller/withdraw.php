<?php 

include '../Model/dbconnection.php';
include '../Controller/loginaction.php';
include '../View/balancedeposite.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
$deposite = mysqli_real_escape_string($conn,$_POST['balance']);
$sql = "UPDATE moneywithdraw SET balance=balance+$deposite WHERE user = $myusername";
if ($conn->query($sql) === TRUE) {

  echo "Record updated successfully";

} else {

  echo "Error updating record: " . $conn->error;

}

$conn->close() ;

}


 ?>