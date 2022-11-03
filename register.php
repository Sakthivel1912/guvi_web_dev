<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}

 ///JSON FILE (link with--- data.json)
$con= mysqli_connect("localhost", "root", "", "new_one");
$resuleset=mysqli_query($con,"SELECT * FROM  login_tb");
$json_array=array();
while($row=mysqli_fetch_assoc($resuleset))
{
  $json_array[]=$row;
}
$encoded_data=json_encode($json_array,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents('data.json',$encoded_data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/style.css">
    <script src="js/box.js"></script>
  </head>
  <body>
<section>
    <div class="container nt-5 pt-5">
    <div class="row">
    <div class="col-12 col-sn-8 col-snd-6 n-auto">
    <div class="card">
    <div class="card-body">
        <svg  width="40" height="40" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
          </svg>
        <form action="" class="login__create " method="post" id="login-up">
        <input type="hidden" id="action" value="register">
          <h3> Name</h3>
            <input type="text" name="name" id="name" class="form-control my-5 py-2" placeholder="username">
          <h3>E-mail</h3>
            <input type="text" name="username" id="username" class="form-control my-5 py-2" placeholder="usermail">
          <h3>Password</h3> 
          <input type="password" name="passsword" id="password" class="form-control my-5 py-2" placeholder="creat password">
        <div class="text-center">

        <button  type="submit" class="btn btn-primary" onclick="submitData();">sign up</button>
        <br>
        <span class="login__account">Already have an Account ?</span>
       <p><a class="login__signup" id="sign-in" href="login.php">Sign In</a></p>
 
</div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php require 'script.php'; ?>
</section>
    
  </body>
</html>