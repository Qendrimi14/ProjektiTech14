<html>
    <head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">

    </head>
    <body>

    <?php include("include/header.php")?>

    <?php

      if(isset($_POST['login'])){
        Login($_POST['email'], $_POST['password']);
      }
    
    ?>
      


      <div class="overlay">
        <div class="overlay-background"></div>
        <div class="overlay-content">
          <h1 class="main-heading">Login</h1>
          <form action="" method="POST" class="login-form">
          <label >Email Address</label>
                <input id="emailL" class="emailL" placeholder="Email" type="email" name="email" >
                <label>Password</label>
                <input id="passwordL" class="passwordL" placeholder="Password" type="password" name="password" >
                <button type="submit" class="btn btn-outline login-btn" name="login"
                              onclick="validateL()" value="Log In" style="width: 150px; margin-top: 10px;">Login</button>
              </form>
            </div>
          </div>

          <?php include("include/footer.php") ?>


          <script src="js/js1.js"></script>
        </body>
</html>