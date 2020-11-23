<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div style="display:inline-center;">
    <?php include 'header.php' ?>
  </div>
   <div style="display:inline-block;">
    <h1>Login</h1>
   <br />
   <form action = "/WT/Webtech/SportsE-commerce/Viewfiles/Actionfiles/action_loginshop.php" method = "POST">
      <div>
         <label for="username"><b>Username</b></label>
         <input type="text" name="username"/>
      </div>
      <br /><br />
      <div>
         <label for="psw"><b>Password</b></label>
         <input type="password" name="psw"/>
      </div>
      <br /><br />
      <div>
         <button type="button" onClick="document.location.href='/WT/Webtech/SportsE-commerce/landing.php'">Cancel</button>
         <button type="button" onClick="document.location.href='signupall.php'">Sign Up</button>
         <button type="submit" value=" Submit">Submit</button>
      </div>
   </form>

    <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>