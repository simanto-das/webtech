<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		#crudtable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#crudtable td, #crudtable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#crudtable tr:nth-child(even){background-color: #f2f2f2;}

#crudtable tr:hover {background-color: #ddd;}

#crudtable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
	</style>
</head>
<body>
	<?php
	include 'dbconnection.php';
      $sql = "SELECT * FROM crudoperation";
      $query_run = mysqli_query($conn,$sql);
      if(mysqli_num_rows($query_run)>0)
      {
      	
      	?>
     
     <table id="crudtable">
     	<thead>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Birth date</th>
    <th>Modify</th>
  </tr>
</thead>
   <tbody>
   <?php
    while ($row = mysqli_fetch_assoc($query_run))
      	{ 
      		?>
     <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    <td><form action="update.php" method="POST">
    	<input type="hidden" name="update_id" value="<?php echo $row['id'];?>">
    	<button type="submit" name="updatedata" value="submit">Update</button></form>
    	<form action="delete.php" method="POST">
    	<input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
    	<button type="submit" name="delete_btn">Delete</button></td>
        </form>
  </tr>  
      	<?php 
         
      	}
   ?>
</tbody>

</table>

 	<?php
    }
      else 
      {
      	echo "NO RECORD FOUND";
      }

      ?> 

</body>
</html>