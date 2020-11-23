
<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
   
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
      <a style="margin-left:10px; font-size:120%;" href="View files/signupall.php">Campaign</a>
      <a style="margin-left:10px; font-size:120%;" href="View files/signupall.php">All Products</a> 
      <a style="margin-left:10px; font-size:120%;" href="View files/signupall.php">Brands</a> 
      <a style="margin-left:10px; font-size:120%;" href="View files/login.php">Gift Cards</a>
      <a style="margin-left:10px; font-size:120%;" href="View files/login.php">Customer Accounts</a>
      <a style="margin-left:10px; font-size:120%;" href="chat.php">Chat</a>
    </nav>
  </div>

  <div  style="max-width:1500px; background-color: DodgerBlue; margin-left:100px; margin-right:100px;">

   <div id="container">
    <h1>Sending Reply</h1>
    <form action="" method="post">
     <ul>
      <li>
       <label for="email">Email</label>
       <input type="text" name="email" id="email" placeholder="enter receiver mail" /></li>
      <li>
      <label for="username">Username</label>
       <input type="text" name="username" id="username" />
      </li>
      <li>
       <label for="replyMessage">Message</label>
       <textarea name="replyMessage" id="replyMessage" cols="45" rows="15"></textarea>
      </li>
     <li><input type="submit" name="sendMessage" id="sendMessage" value="Send Message" /></li>
    </ul>
   </form>
  </div>

  <?php
 
if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
 if (
 isset( $_REQUEST['email'], $_REQUEST['username'], $_REQUEST['replyMessage'] ) &&
  !empty( $_REQUEST['email'] ) &&
  !empty( $_REQUEST['username'] )
 ) {
  $message = wordwrap( $_REQUEST['replyMessage'], 70 );
  $to = $_REQUEST['email'] . '@' . $_REQUEST['username'];
  $result = @mail( $to, '', $message );
  print 'Message was sent to ' . $to;
 } else {
  print 'Not all information was submitted.';
 }
}

?>

</div>

  <div>
    <?php include 'footer.php' ?>
  </div>

 </body>
</html>