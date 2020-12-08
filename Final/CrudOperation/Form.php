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
</style>
</head>
<body>
  <?php
  include 'dbconnection.php'; 
  ?>
  <div>
  <form action="insert.php" method="POST">
    <label for="id">ID</label>
    <input type="text" id="id" name="id" placeholder="Your ID..">

    <label for="uname">User Name</label>
    <input type="text" id="uname" name="uname" placeholder="Your User name..">

    <label for="Password">Password</label>
    <input type="Password" id="Password" name="Password" placeholder="Your Password..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email..">

     <label for="birthday">Birthday :</label>
    <input type="date" id="birthday" name="birthday" >

   
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>