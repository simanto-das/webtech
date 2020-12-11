<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="ViewProductDetails.css">
  <link rel="stylesheet" type="text/css" href="Buttonstyle.css">
</head>
<body>
  <?php include '../Model/dbconnection.php';?>
  <div>
<div class="container">  
 
<?php
  $query = "SELECT * FROM product";
  $query_run = mysqli_query($conn,$query);
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
  if(mysqli_num_rows($query_run) > 0)
  {   
    while ($row = mysqli_fetch_assoc($query_run)) {
       ?>
             
             <div class="card">
              <?php echo '<img src="../Controller/uploads/'.$row['image'].'" alt="Avatar" height="300px" width="230px">'?>
               <h4><b><?php echo $row['name']?></b></h4> 
               <p><?php echo "price:".$row['price']."description:   ".$row['description']."category:".$row['category'] ?></p>
               <div>
                 <button class="buttonedit">Edit</button><span><button class="buttonremove">Remove</button></span>
               </div> 
             </div>
             

             <?php  
               }
             ?>
          <?php

  }
  else
  {
    echo"No record found";
  }

               ?>      
 


</div>

 </div>
</body>
</html>