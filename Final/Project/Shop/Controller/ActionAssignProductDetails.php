
<?php
include '../Model/dbconnection.php';

$prid = mysqli_real_escape_string($conn, $_REQUEST['id']);
$prname = mysqli_real_escape_string($conn, $_REQUEST['pn']);
$prprice = mysqli_real_escape_string($conn, $_REQUEST['pr']);
$prdescription = mysqli_real_escape_string($conn, $_REQUEST['pd']);
$prcategory = mysqli_real_escape_string($conn, $_REQUEST['ct']);
$primage = $_FILES['filename']['name'];

 if(file_exists("../Controller/uploads/".$_FILES["filename"]["name"])){
 	echo "Image already exicts";
 }
 else{
$sql = "INSERT INTO product (id, name, price, description, category, image) VALUES ('$prid', '$prname','$prprice', '$prdescription','$prcategory','$primage')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
   
    move_uploaded_file($_FILES['filename']['tmp_name'],"../Controller/uploads/".$_FILES['filename']['name']);
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}  
}
 

mysqli_close($conn);


 




?>