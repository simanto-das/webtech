<?php
include '../Model/dbconnection.php';
include '../View/AssignProductDetails.php';

$prid = mysqli_real_escape_string($conn, $_REQUEST['id']);
$prname = mysqli_real_escape_string($conn, $_REQUEST['pn']);
$prprice = mysqli_real_escape_string($conn, $_REQUEST['pr']);
$prdescription = mysqli_real_escape_string($conn, $_REQUEST['pd']);
$prcategory = mysqli_real_escape_string($conn, $_REQUEST['ct']);
$primage = mysqli_real_escape_string($conn, $_REQUEST['filename']);

$sql = "INSERT INTO product (id, name, price, description, category, image) VALUES ('$prid',$prname', '$prprice','$prdescription', '$prcategory','$primage')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location: Table.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 




?>