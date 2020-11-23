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
      <a style="margin-left:10px; font-size:120%;" href="adshopproducts.php">All Products</a> 
      <a style="margin-left:10px; font-size:120%;" href="View files/signupall.php">Brands</a> 
      <a style="margin-left:10px; font-size:120%;" href="View files/login.php">Gift Cards</a>
      <a style="margin-left:10px; font-size:120%;" href="View files/login.php">Customer Accounts</a>
      <a style="margin-left:10px; font-size:120%;" href="chat.php">Chat</a>
    </nav>
  </div>

  <div>
     <form action="searchproducts.php" method="post">
       <input type="text" name="search" placeholder="type product id"><button type="submit" value="submit">search</button>
     </form>
   </div>

	<div>


		<ol>
      
    <?php 
         $id = $name = $price = $description = $category="";
         $myfile = fopen("C:/xampp/htdocs/WT/Webtech/SportsE-commerce/Viewfiles/Datafiles/items.txt", "r") or die("Unable to open file!");
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>price</th>";
        echo "<th>description</th>";
        echo "<th>category</th>";
        echo "</tr>";
         while ($line = fgets($myfile)) {
              $words = explode(",",$line);
               $id = $words[0];
               $name = $words[1];
               $price = $words[2];
               $description = $words[3];
               $category = $words[4];
        echo "<tr>";
        echo "<td>".$id."</td>";
        echo "<td>".$name."</td>";
        echo "<td>".$price."</td>";
        echo "<td>".$description."</td>";
        echo "<td>".$category."</td>";
        echo"</tr>";
      
      }
      fclose($myfile);
      echo"</table>";
      ?>
 </ol>

  <div style="margin-left: 60px;padding: 5px">
      <button type="button" onClick="document.location.href='remove.php'">Remove</button> 
    </div>

 <?php  
     $dir_path = "C:xampp\htdocs\WT\Webtech\SportsE-commerce\Viewfiles\uploads";
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