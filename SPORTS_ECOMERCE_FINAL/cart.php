<?php 
if (isset($_GET['id'])) {
	# code...

$product = $_GET['id'];
$price = $_GET['price'];
$pname = $_GET['pname'];


setcookie("product", $product, time() + (86400 * 30), "/");
setcookie("price", $price, time() + (86400 * 30), "/");
setcookie("pname", $pname, time() + (86400 * 30), "/");

header("Location: checkout.php");

}else{
	header("Location: index.php");
}



?>