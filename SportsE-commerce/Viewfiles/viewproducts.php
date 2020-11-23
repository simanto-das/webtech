<!DOCTYPE html>
<html>
<head>
	<title>view products </title>
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
      <a style="margin-left:10px; font-size:120%;" href="View files/signupall.php">All Products</a> 
      <a style="margin-left:10px; font-size:120%;" href="View files/signupall.php">Brands</a> 
      <a style="margin-left:10px; font-size:120%;" href="View files/login.php">Gift Cards</a>
      <a style="margin-left:10px; font-size:120%;" href="View files/login.php">Customer Accounts</a>
      <a style="margin-left:10px; font-size:120%;" href="chat.php">Chat</a>
    </nav>
  </div>

	<div>


		<ol>
    <?php 
         $producttxt = fopen("C:/xampp/htdocs/WT/Webtech/SportsE-commerce/Viewfiles/Datafiles/items.txt", "r") or die("Unable to open file!");
        
          while ($products = fgets($producttxt)) {
        echo "<li>".$products."</li><button onClick=document.location.href='cartlist.php'>addtocart</button>";
      }
      fclose($producttxt);

      ?>
 </ol>

 <?php  
     $dir_path = "C:/xampp/htdocs/WT/Webtech/SportsE-commerce/Viewfiles/uploads";
$extensions_array = array('jpg','png','jpeg');

if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            
            
            // get file extension
            $file = pathinfo($files[$i]);
            $extension = $file['extension'];
           // check file extension
            if(in_array($extension, $extensions_array))
            {
            // show image
            echo "<span><img src='$dir_path$files[$i]' style='width:100px;height:100px;'><br></span>";
            }
        }
    }
}

     ?>

 </div>

 <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>