<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="AssignProductDetails.css">
	<style>
		
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
	</style>
</head>
<body>
  <?php
  include '../Model/dbconnection.php';
     if (isset($_POST['editbtn']))
      {
      $id = $_POST['editid'];
      $sql = "SELECT * FROM product WHERE id='$id'";
      $query_run = mysqli_query($conn,$sql);
      foreach ($query_run as $row) 
      {
  

  ?>    

     <div>
     <form action="../Controller/Actioneditpage.php" method="POST" enctype="multipart/form-data">
     <label for="id">Product id</label>
    <input type="text" id="id" name="id" value="<?php echo $row['id'];?>">

    <label for="pn">Product name</label>
    <input type="text" id="pn" name="pn" value="<?php echo $row['name'];?>">

    <label for="pr">Product Price:</label>
    <input type="text" id="pr" name="pr" value="<?php echo $row['price'];?>">

    <label for="pd">Product description</label>
    <textarea  name="pd" id="pd" ><?php echo $row['description'];?></textarea>

     <label for="ct">Category</label>
    <select id="ct" name="ct">
      <option value="Shoe">Shoe</option>
      <option value="Jersy">Jersy</option>
      <option value="Outdoor gaming accessories">Outdoor gaming accessories</option>
      <option value="Indoor gaming accessories">Indoor gaming accessories</option>
      <option value="Online games">Online games</option>
    </select>
     
     <pre><label for="myfile">Upload image</label><span>  <input type="file" id="myFile" name="filename" value="<?php echo $row['image'];?>"></span></pre>
     
    <button class="button" type="submit" value="submit" name="update-btn">OK</button>
</form>
    </div>


     <?php

     	}
     }

	?>

</body>
</html>