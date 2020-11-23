<!DOCTYPE html>
<html>
<head>
	<title>add shop </title>
</head>
<body>

  <div style="display:inline-center;">
    <?php include 'header.php' ?>
  </div>

  <div style="display:inline-block; margin-bottom: 20px;">

    <nav>
      <a style="margin-left:10px; font-size:120%;" href="adminhome.php">Home</a>
      <a style="margin-left:10px; font-size:120%;" href="viewcatagories.php">Categories</a>
      <a style="margin-left:10px; font-size:120%;" href="shop.php">All Shops</a> 
      <a style="margin-left:10px; font-size:120%;" href="View files/signupall.php">Campaign</a>
      <a style="margin-left:10px; font-size:120%;" href="adshopproducts.php">All Products</a> 
      <a style="margin-left:10px; font-size:120%;" href="signupall.php">Brands</a> 
      <a style="margin-left:10px; font-size:120%;" href="login.php">Gift Cards</a>
      <a style="margin-left:10px; font-size:120%;" href="login.php">Customer Accounts</a>
      <a style="margin-left:10px; font-size:120%;" href="chat.php">Chat</a>
    </nav>
  </div>

	<?php 
	$addshop = "";
	$shopname_error= "";
	$addshop_status = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["addshop"]) & !empty($_POST["addshop"])) {
    $addshop = test_input($_POST["addshop"]);
  }
  else {
    $shopname_error = "Please type Shope name";
    $counter = $counter + 1;
  }

  if($counter == 0) {
    $addshop_status= "Added Successful";

    $user = fopen("C:/xampp/htdocs/WT/Webtech/SportsE-commerce/Viewfiles/Datafiles/addshop.txt", "a") or die("Unable to open file!");
    fwrite($user, $addshop);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $addshop_status = "Sign Up Failed";
    $counter = 0;
  }

}

else {
	$signup_status = "Sign Up Failed";
}


 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}

	 ?>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<label>Add shop</label>
	<input type="text" name="addshop">
	<span><?php echo $shopname_error; ?></span><br>
	<button type="submit">submit</button>
</form>
<?php echo $addshop_status ?>

<div>
	<ul>
		<?php
		$shops = fopen("../Viewfiles/Datafiles/addshop.txt", "r") or die("Unable to open file!");
		while ($allshops=fgets($shops)) {
		  	echo "<li><a href=shopdetails.php>".$allshops."</a></li>";
		  
		  }
		  fclose($shops);  

		?>

	</ul>
</div>
	 <div>
    <?php include 'footer.php' ?>
  </div>

</body>
</html>