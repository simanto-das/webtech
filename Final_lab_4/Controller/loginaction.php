<?php 
include '../Model/dbconnection.php';


 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = "SELECT id FROM moneywithdraw WHERE user = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      
        if ($result->num_rows > 0) {
    // output data of each row
               echo "login successful ";
               header("Location:../View/balancedeposite.php");
               exit();
    } 
    else {
        $conn->close();
        echo "username or password are not matched";
        return false; 
    }
      }
   

 ?>