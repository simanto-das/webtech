<!DOCTYPE html>
<html>
<head>
	<title></title>
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

  <div  style="max-width:1500px; background-color: #FFA233; margin-left:100px; margin-right:100px;">
	<?php 

       $productid = $productname = $productprice = $productdescription = $productcatagory="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $productid= $_POST['search'];

      $myfile = fopen("../Viewfiles/Datafiles/items.txt", "r") or die("Unable to open file!");

      while ($line = fgets($myfile)) {
              $words = explode(",",$line);
              if($productid==$words[0]){
                $productname = $words[1];
                $productprice = $words[2];
                $productdescription = $words[3];
                $productcatagory = $words[4];



                
              }
             
              else{
                //echo "No Product found";
               
              }
          }
          fclose($myfile);

          
    }
	 ?>

	 <div>
	 	<ol>
	 		<?php
	 	
	 		  echo "<li>".$productid."," .$productname.",".$productprice.",".$productdescription.",".$productcatagory."</li>";

	 		  ?>

	 	</ol>

	 </div>
	 	
	 </div>

	 <div>
    <?php include 'footer.php' ?>
  </div>

</body>
</html>