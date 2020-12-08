<?php 
include 'dbconnection.php';

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM crudoperation WHERE id='$id'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
   	echo "Deleted Successfull";
   	header("Location: Table.php");
   }
   else 
   {
   	echo  "NOt Deleted";
   }

} 

 ?>