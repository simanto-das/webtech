<?php
include 'dbconnection.php';
include 'Form.php';

$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$username = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$password = mysqli_real_escape_string($conn, $_REQUEST['Password']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$birthdate = mysqli_real_escape_string($conn, $_REQUEST['birthday']);

$sql = "INSERT INTO crudoperation (id, username, password, email, dob) VALUES ('$id', '$username','$password', '$email','$birthdate')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location: Table.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 




?>