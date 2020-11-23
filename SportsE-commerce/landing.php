<!DOCTYPE html>

<?php
$cookie_name = "anonymoususer1";
$cookie_value = "demo";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

$myfile = fopen("../SportsE-commerce/Viewfiles/Datafiles/cookies.txt", "w") or die("Unable to open file!");
fwrite($myfile, $cookie_name . " " . $cookie_value . " ");
fclose($myfile);
?>

<html>
<head>
  <title>SPORTS-ECOMMERCE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div style="display:inline-center;">
    <?php include 'Viewfiles/header.php' ?>
  </div>
  <div style="display:inline-block;">

    <nav>
      <a style="margin-left:10px; font-size:120%;" href="Viewfiles/viewcatagories.php">Categories</a>
      <a style="margin-left:10px; font-size:120%;" href="Viewfiles/signupall.php">All Shops</a> 
      <a style="margin-left:10px; font-size:120%;" href="Viewfiles/signupall.php">Campaign</a>
      <a style="margin-left:10px; font-size:120%;" href="Viewfiles/aboutus.php">About Us</a> 
      <a style="margin-left:10px; font-size:120%;" href="Viewfiles/signupall.php">Sign Up Here</a> 
      <a style="margin-left:10px; font-size:120%;" href="Viewfiles/loginadmin.php">Login</a>
    </nav>
  </div>
  <div>
  </div>
<div  style="max-width:1500px; background-color: lightgrey; margin-left:100px; margin-right:100px;">
  <h2 style="text-align: center; margin-top: 30px;">OUR PRODUCTS</h2>
  
  <div>
    <p> <h2 style="margin-left: 100px"> Jersey </h2> </p>
    <pre><img src="j1.jpg" alt="Real Madrid Away Kit"  style="width: 20%; margin-left: 10px;">
    <p> <h2 style="text-align:left; margin-left: 25px"> Real Madrid Away kit </h2> </p>
    <div style="margin-left: 60px;padding: 5px">
      <button type="button" onClick="document.location.href='categories.php'">categories</button> 
    </div>

  </div>
 
 <div>
    <p> <h2 style="margin-left: 60px"> Boots and Shoes </h2> </p>
    <pre><img src="j2.jpg" alt="Real Madrid Away Kit"  style="width: 20%; margin-left: 10px;">
    <p> <h2 style="text-align:left; margin-left: 65px"> Nike shoes </h2> </p>
    <div style="margin-left: 60px;padding: 5px">
      <button type="button" onClick="document.location.href='categories.php'">categories</button> 
    </div>
    
  </div >
<div style="margin-left: 600px;">
  <button style="background-color: tomato"type="button" onClick="document.location.href='View files/signupall.php'">View all</button>
</div>  
</div>

<div  style="max-width:1500px; background-color: lightgrey; margin-left:100px; margin-right:100px;">
  <h2 style="text-align: center; margin-top: 40px;">This weeks Gift Card</h2>
   <h1 style="text-align: center; margin-top: 40px; font-family: Arial; font-size: 250%; color: blue;">45% Discount</h1>

   <div style="margin-left: 600px;padding: 5px;">
      <button type="button" onClick="document.location.href='categories.php'">Get Code</button> 
    </div>

</div>

<div  style="max-width:1000px; background-color: lightblue; margin-left:250px; margin-right:100px;">
  <h2 style="text-align: center; margin-top: 30px; color: black; font-size: 200%">Our Shops</h2>
  <h2 style="text-align: left; margin-top: 30px; margin-left: 20px; color: black; font-size: 120%; font-family: helvetica"> Nike </h2>
   
   <div style="padding: 5px">
      <button type="button" onClick="document.location.href='categories.php'">categories</button> 
    </div>

    <h2 style="text-align: left; margin-top: 30px; margin-left: 20px; color: black; font-size: 120%; font-family: helvetica"> Adidas </h2>
   
   <div style="padding: 5px">
      <button type="button" onClick="document.location.href='categories.php'">categories</button> 
    </div>

    <h2 style="text-align: left; margin-top: 30px; margin-left: 20px; color: black; font-size: 120%; font-family: helvetica"> Puma </h2>
   
   <div style="padding: 5px">
      <button type="button" onClick="document.location.href='categories.php'">categories</button> 
    </div>

    <h2 style="text-align: left; margin-top: 30px; margin-left: 5px; color: black; font-size: 120%; font-family: helvetica"> ABC Sports </h2>
   
   <div style="padding: 5px">
      <button type="button" onClick="document.location.href='categories.php'">categories</button> 
    </div>

    <div style="margin-left: 480px;">
  <button style="background-color: tomato"type="button" onClick="document.location.href='Viewfiles/shop.php'">View all</button>
</div>  

  </div>


<div  style="max-width:1000px;  margin-left:250px; margin-right:100px;">
  <h2 style="text-align: center; margin-top: 30px; color: DodgerBlue; font-size: 200%">About Us</h2>

  <h2 style="text-align: center; margin-top: 30px; color: black; font-size: 120%; font-family: helvetica">Sports E-commerce is a sports based e-commerce website. In this website, we tried to put every section e-commerce or sports online market. We tried to make more user friendly feature and we have used simple HTML code and PHP code. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</h2>


  </div>


  

  <div>
    <?php include 'Viewfiles/footer.php' ?>
  </div>
</body>
</html>
