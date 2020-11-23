<!DOCTYPE html>
<html>
<head>
	<title>shop details</title>
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
      <a style="margin-left:10px; font-size:120%;" href="View files/signupall.php">Brands</a> 
      <a style="margin-left:10px; font-size:120%;" href="View files/login.php">Gift Cards</a>
      <a style="margin-left:10px; font-size:120%;" href="View files/login.php">Customer Accounts</a>
      <a style="margin-left:10px; font-size:120%;" href="chat.php">Chat</a>
    </nav>
  </div>
<?php 

$productid = $productname = $productprice = $productdescription = $productcatagory  = "";
$productidErr = $productnameErr = $productpriceErr = $productdescriptionErr = $productcatagoryErr =  "";
$product_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  
 if (isset($_POST["productid"]) & !empty($_POST["productid"])) {
    $productid = test_input($_POST["productid"]);
  }
  else {
    $productidErr = "Please type product name";
    $counter = $counter + 1;
  }

  if (isset($_POST["productname"]) & !empty($_POST["productname"])) {
    $productname = test_input($_POST["productname"]);
  }
  else {
    $productnameErr = "Please type product name";
    $counter = $counter + 1;
  }

  if (isset($_POST["productprice"]) & !empty($_POST["productprice"])) {
    $productprice = test_input($_POST["productprice"]);
  }
  else {
    $productpriceErr = "Please type price";
    $counter = $counter + 1;
  }

  if (isset($_POST["productdescription"]) & !empty($_POST["productdescription"])) {
    $productdescription = test_input($_POST["productdescription"]);
  }
  else {
    $productdescriptionErr = "please add a description";
    $counter = $counter + 1;
  }

  if (isset($_POST["productcatagory"]) & !empty($_POST["productcatagory"])) {
    $productcatagory = test_input($_POST["productcatagory"]);
  }
  else {
    $productcatagoryErr = "please select catagory";
    $counter = $counter + 1;
  }



  if($counter == 0) {
    $product_status = "Added  Successful";

    $user = fopen("C:/xampp/htdocs/WT/Webtech/SportsE-commerce/Viewfiles/Datafiles/items.txt", "a") or die("Unable to open file!");
    fwrite($user, $productid. "," .$productname. "," . $productprice. ",". $productdescription. ",". $productcatagory);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $product_status = "Added Failed";
    $counter = 0;
  }
}
else {
	$signup_status = "Added Failed";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <div>
    <div>
    <label for="productcatagory">Select Catagory:</label>

<select name="productcatagory" id="catagory">
  <option value="shoe">shoe</option>
  <option value="jersy">jersy</option>
  <option value="indoor gaming accessories">indoor gaming accessories</option>
  <option value="outdoor gaming accessories">outdoor gaming accessories</option>
  <option value="online games">online games</option>
</select>	

    </div>
    <br/>

     <div>
      <label for="productid">Product ID</label>
      <input type="text"  name="productid">
      <span><?php echo $productidErr;?></span>
    </div>


    <div>
      <label for="productname">Product name</label>
      <input type="text"  name="productname">
      <span><?php echo $productnameErr;?></span>
    </div>

    <br />

    <div>
      <label for="productprice">Product price</label>
      <input type="text"  name="productprice">
      <span><?php echo $productpriceErr;?></span>
    </div>

    <br />

    <div>
      <label for="productdescription">Product description</label>
      <input type="text"  name="productdescription">
      <span><?php echo $productdescriptionErr; ?></span>
    </div>
    <br/>
    <div>
      <button type="button" onClick="document.location.href='adshopproducts.php'">view</button>
      <button type="submit">Submit</button>
    </div>
  </div>
</form>
  <div>
    	<form action="uploads.php" method="POST" enctype="multipart/form-data">
    		<input type="file" name="file"><br/>
    		<button type="submit" name="submit">Upload</button>
    		

    	</form>
    </div>


   <div>
     <form action="searchproducts.php" method="post">
       <input type="text" name="search" placeholder="type product id"><button type="submit" value="submit">search</button>
     </form>
   </div>

<br />


<div>
    <?php include 'footer.php' ?>
  </div>

</body>
</html>