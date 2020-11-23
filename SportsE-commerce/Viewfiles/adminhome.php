<!DOCTYPE html>
<html>
<head>
  <title>SPORTS-ECOMMERCE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div style="display:inline-center;">
    <?php include 'header.php' ?>
  </div>
  <div style="display:inline-block;">

    <nav>
      <a style="margin-left:10px; font-size:120%;" href="adminhome.php">Home</a>
      <a style="margin-left:10px; font-size:120%;" href="viewcatagories.php">Categories</a>
      <a style="margin-left:10px; font-size:120%;" href="shop.php">All Shops</a> 
      <a style="margin-left:10px; font-size:120%;" href="signupall.php">Campaign</a>
      <a style="margin-left:10px; font-size:120%;" href="adshopproducts.php">All Products</a> 
      <a style="margin-left:10px; font-size:120%;" href="signupall.php">Brands</a> 
      <a style="margin-left:10px; font-size:120%;" href="login.php">Gift Cards</a>
      <a style="margin-left:10px; font-size:120%;" href="login.php">Customer Accounts</a>
      <a style="margin-left:10px; font-size:120%;" href="chat.php">Chat</a>
    </nav>
  </div>
  <div>
  </div>
<div  style="max-width:1500px; background-color: lightgrey; margin-left:100px; margin-right:100px;">
  <h2 style="text-align: center; margin-top: 30px;">Top PRODUCTS</h2>
  
  <div>
    <p> <h2 style="margin-left: 100px"> Jersey </h2> </p>
    <pre><img src="l1.png" alt="Juventus Jersey"  style="width: 20%; margin-left: 10px;">
    <p> <h2 style="text-align:left; margin-left: 45px"> Juventus Jersey </h2> </p>
    <div style="margin-left: 60px;padding: 5px">
      <button type="button" onClick="document.location.href='viewdetail.php'">View Details</button> 
    </div>

  </div>
 
 <div>
    <p> <h2 style="margin-left: 60px"> PS4 Games </h2> </p>
    <pre><img src="l2.jpg" alt="Real Madrid Away Kit"  style="width: 20%; margin-left: 10px;">
    <p> <h2 style="text-align:left; margin-left: 85px"> Fifa 21 </h2> </p>
    <div style="margin-left: 60px;padding: 5px">
      <button type="button" onClick="document.location.href='viewdetail.php'">View Details</button> 
    </div>
    
  </div >
<div style="margin-left: 600px;">
  <button style="background-color: tomato"type="button" onClick="document.location.href='viewproducts.php'">View all</button>
</div>  
</div>

<div  style="max-width:1500px; background-color: lightgrey; margin-left:100px; margin-right:100px;">
  <h2 style="text-align: center; margin-top: 40px;">This weeks Gift Card</h2>
   <h1 style="text-align: center; margin-top: 40px; font-family: Arial; font-size: 250%; color: blue;">45% Discount</h1>

   <div style="margin-left: 600px;padding: 5px;">
      <button type="button" onClick="document.location.href='categories.php'">View Card</button> 
    </div>

</div>

<div  style="max-width:1000px; background-color: lightblue; margin-left:250px; margin-right:100px;">
  <h2 style="text-align: center; margin-top: 30px; color: black; font-size: 200%">Available Shops</h2>
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
  <button style="background-color: tomato"type="button" onClick="document.location.href='shop.php'">View all</button>
</div>  

  </div>


  <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>