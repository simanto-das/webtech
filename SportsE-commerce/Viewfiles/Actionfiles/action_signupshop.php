<!DOCTYPE html>
<html>
<head>
  <title>Sign Up shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

$firstname = $lastname = $email = $shopname = $psw = $psw_repeat = "";
$firstnameErr = $lastnameErr = $emailErr = $shopnameErr = $pswErr = $psw_repeatErr = "";
$signup_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["firstname"]) & !empty($_POST["firstname"])) {
    $firstname = test_input($_POST["firstname"]);
  }
  else {
    $firstnameErr = "Invalid FirstName";
    $counter = $counter + 1;
  }

  if (isset($_POST["lastname"]) & !empty($_POST["lastname"])) {
    $lastname = test_input($_POST["lastname"]);
  }
  else {
    $lastnameErr = "Invalid LastName";
    $counter = $counter + 1;
  }

  if (isset($_POST["email"]) & !empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
  }
  else {
    $emailErr = "Invalid Email";
    $counter = $counter + 1;
  }

   if (isset($_POST["shopname"]) & !empty($_POST["shopname"])) {
    $shopname = test_input($_POST["shopname"]);
  }
  else {
    $admincodeErr = "Invalid shopname";
    $counter = $counter + 1;
  }


  if (isset($_POST["psw"]) & !empty($_POST["psw"])) {
    $psw = test_input($_POST["psw"]);
  }
  else {
    $pswErr = "Invalid Password";
    $counter = $counter + 1;
  }

  if (isset($_POST["psw_repeat"]) & !empty($_POST["psw_repeat"])) {
    $psw_repeat = test_input($_POST["psw_repeat"]);
  }
  else {
    $psw_repeatErr = "Invalid Password Repeat";
    $counter = $counter + 1;
  }

  if($counter == 0) {
    $signup_status = "Sign Up Successful";

    $user = fopen('C:\xampp\htdocs\WT\Webtech\SportsE-commerce\Viewfiles\Datafiles\shopsuser.txt', "a") or die("Unable to open file!");
    fwrite($user, $firstname. "," . $lastname. ",". $email. "," . $shopname. "," . $psw);
    fwrite($user, "\n");
    fclose($user);
    
  }
  else {
    $signup_status = "Sign Up failed" ;
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

<div style="display:inline-center;">
    <?php include 'C:xampp\htdocs\WT\Webtech\SportsE-commerce\Viewfiles\header.php' ?>
  </div>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <div>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <br />

    <div>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your firstname" name="firstname">
      <span><?php echo $firstnameErr;?></span>
    </div>

    <br />

    <div>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your lastname" name="lastname">
      <span><?php echo $lastnameErr;?></span>
    </div>

    <br />

    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
      <span><?php echo $emailErr;?></span>
    </div>

    <br />

    <div>
      <label for="shopname"><b>Shop name</b></label>
      <input type="text" placeholder="Enter name" name="shopname">
      <span><?php echo $shopnameErr;?></span>
    </div>

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
      <span><?php echo $pswErr;?></span>
    </div>

    <br />
    
    <div>
      <label for="psw_repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat">
      <span><?php echo $psw_repeatErr;?></span>
    </div>

    <br />

    <div>
      <button type="button" onClick="document.location.href='/WT/Webtech/SportsE-commerce/landing.php'">Cancel</button>
      <button type="button" onClick="document.location.href='/WT/Webtech/SportsE-commerce/Viewfiles/loginshop.php'">Login</button>
      <button type="submit">Submit</button>
    </div>
  </div>
</form>

<br />

<?php 
  echo $signup_status;
?>

 <div>
    <?php include '../footer.php' ?>
  </div>
</body>
</html>
