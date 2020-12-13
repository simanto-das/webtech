<?php 
 include '../Model/dbconnection.php';

 if (isset($_POST['update-btn']))
 {
 	$id = $_POST['id'];
 	$name = $_POST['pn'];
 	$price = $_POST['pr'];
 	$description = $_POST['pd'];
 	$category = $_POST['ct'];
 	$image = $_FILES['filename']['name'];
 	$query = "UPDATE product SET id='$id', name='$name', price='$price', description='$description', category='$category', image='$image' WHERE id='$id'";
 	$query_run = mysqli_query($conn,$query);

 	if($query_run)
 	{
      echo "Updated";
      move_uploaded_file($_FILES['filename']['tmp_name'],"../Controller/uploads/".$_FILES['filename']['name']);
      header("Location: ../View/ViewProductDetails.php");

 	}
 	else
 	{
 		echo "NOt UPDATED";

 	}

 }


 ?>