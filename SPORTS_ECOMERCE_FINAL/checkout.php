<?php
include('config.php');
session_start();

if (isset($_SESSION["userid"]) && isset($_COOKIE['product'])) {
if (isset($_POST["submit"])) {
$uid = $_SESSION["userid"];
$pid= $_COOKIE['product'];
$qt = $_POST["quantity"];
$price = $_COOKIE['price'];
    $sql = "INSERT INTO orders (product_id, user_id, quantity,price)
VALUES ('$pid', '$pid','$qt','$price')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    header('Location: success.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	
}else{
	//header("Location: index.php");
}
}else{
	header("Location: index.php");
}



?>



<!DOCTYPE html>
<html>
<head>
<form method="post">

<style>
		.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    float: left;
    margin: 19px;
}


	.header {
  background-color: 
 #ffcc00;
  color: #ffffff;
  padding: 25px;
  text-align: center;

}



.registerbtn {
  background-color: #ff751a;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
	</style>

	<body>

  <div class="header">
    <h1>Checkout</h1>
    <div>
    <br>


 <label for="email"><b>name : <?php echo $_COOKIE['pname']; ?> </b></label> <br><br>

<label for="email"><b>Price : <?php echo $_COOKIE['price']; ?> </b></label> <br><br>


    <label for="email"><b>quantity</b></label>
    <input type="text" name="quantity"  required>

 <div >   
    <button type="submit" class="registerbtn" name="submit">Submit</button>
  </div>
  
  
</form>

</body>
</html>




