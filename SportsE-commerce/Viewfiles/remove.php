<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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

<?php
    $productid = $productname = $productprice = $productdescription = $productcatagory  = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $productname= $_POST['productname'];

      $myfile = fopen("C:/xampp/htdocs/WT/Webtech/SportsE-commerce/Viewfiles/Datafiles/items.txt", "r") or die("Unable to open file!");
          $counter=0;
          while ($line = fgets($myfile)) {
              $words = explode(",",$line);
              if($productname==$words[1]){
                $row_number = $counter;
                break;
              }
              else{
                $counter++;
              }
          }
          fclose($myfile);

          $file_out = file("C:/xampp/htdocs/WT/Webtech/SportsE-commerce/Viewfiles/Datafiles/items.txt");
          unset($file_out[$row_number]);
          file_put_contents("C:/xampp/htdocs/WT/Webtech/SportsE-commerce/Viewfiles/Datafiles/items.txt", implode("", $file_out));


    }


     ?>

     <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <label for="">Enter productname To Remove </label>
       <br><br>
       <input type="text" name="productname" value="<?php echo $productname; ?>">
       <br><br>
       <input type="submit" name="Remove" value="Remove">
     </form>

     <div>
    <?php include 'footer.php' ?>
  </div>

  </body>
</html>