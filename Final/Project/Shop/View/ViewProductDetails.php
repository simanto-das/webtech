<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="ViewProductDetails.css">
  <link rel="stylesheet" type="text/css" href="Buttonstyle.css">
  <style>
    .backbtn {
  background-color:  #e7e7e7; 
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.backbtn {border-radius: 8px;}

    .buttoner
    {
      display: grid;
    }
  </style>
  <script >
    var btn = document.getElementById('back');
btn.addEventListener('click', function() {
  document.location.href = 'AssignProductDetails.html';
});
  </script>
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
                 <form action="EditPage.php" method="POST"><button class="buttonedit" type="submit" value="submit" name="editbtn">Edit</button>
                  <input type="hidden" name="editid" value="<?php echo $row['id'];?>">
                 </form>
                 <form  action="../Controller/Remove.php" method="POST">
                  <button id="remove" class="buttonremove" value="submit" type="submit" name="removebtn">Remove</button><button type="button" onClick="document.location.href='AssignProductDetails.html'" class="backbtn">back</button>
                  <input type="hidden" name="remove" value="<?php echo $row['id'];?>">
                </form>
               
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