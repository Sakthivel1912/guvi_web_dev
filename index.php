<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM login_tb WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link href="css/style.css">
  </head>
  <body>

  <form action="" class="login__create " autocomplete="off" method="post" id="login-up">
    <h1>Welcome  <?php echo $user["name"]; ?> to the page</h1>
    <div class="text-center"> <a href="logout.php" class="login__button_login">Logout</a>
 
    <a href="register.php">Go To Register</a>
    <?php require 'script.php'; ?> 
</body>
  <script src="js/box.js"></script>
</html>