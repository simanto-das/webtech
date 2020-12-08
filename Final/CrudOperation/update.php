<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		
		input[type=text], [type=Password] ,[type=date],[type=Email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  width: 50%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin: auto;
}
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
	include 'dbconnection.php';
     if (isset($_POST['updatedata']))
      {
     	$id = $_POST['update_id'];
     	$sql = "SELECT * FROM crudoperation WHERE id='$id'";
     	$query_run = mysqli_query($conn,$sql);
     	foreach ($query_run as $row) 
     	{
     ?>
     <div>
     <form action="updating.php" method="POST">
     <label for="id">ID</label>
    <input type="text" id="id" name="id" value="<?php echo $row['id'];?>">

    <label for="uname">User Name</label>
    <input type="text" id="uname" name="uname" value="<?php echo $row['username'];?>">

    <label for="password">Password</label>
    <input type="text" id="password" name="password" value="<?php echo $row['password'];?>">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?php echo $row['email'];?>">

     <label for="birthday">Birthday :</label>
    <input type="text" id="birthday" name="birthday" value="<?php echo $row['dob'];?>">
    <button class="button" type="submit" value="submit" name="update-btn">OK</button>
</form>
    </div>


     <?php

     	}
     }

	?>

</body>
</html>