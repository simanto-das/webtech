<?php 
include '../Model/dbconnection.php';

if(isset($_POST['removebtn']))
{
   $id = $_POST['remove'];
   $query = "DELETE FROM product WHERE id='$id'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
   	echo "Deleted Successfull";
   	header("Location: ../View/ViewProductDetails.php");
   }
   else 
   {
   	echo  "NOt Deleted";
   }

} 

 ?>