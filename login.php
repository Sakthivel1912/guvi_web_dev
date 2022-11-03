<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/style.css">
  </head>
  <body>
<section>
    <div class="container nt-5 pt-5">
    <div class="row">
    <div class="col-12 col-sn-8 col-snd-6 n-auto">
    <div class="card">
    <div class="card-body">
        <svg class="nx-auto"  width="40" height="40" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>

          <form action="" class="login__create " method="post" id="login-up">
            <input type="hidden" id="action" value="login">

            <?php if (isset($_GET['error'])) { ?>
     	                	    <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>

            <input type="text" name="" id="username" class="form-control my-5 py-2" placeholder="usermail">
            <input type="password" name="" id="password" class="form-control my-5 py-2" placeholder="password">
            <div class="text-center">
                  <button type="submit" class="btn btn-primary" onclick="submitData();">Login</button>
                <br>
              <a href="register.php">Go To Register</a>
  
  <?php require 'script.php'; ?>
    </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>

  </body>
</html>