<html>
    <head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">



    </head>
    <body>
    <?php include("include/header.php")?>

    <?php
      if(isset($_POST['register'])){
        Register($_POST['registerEmri'], $_POST['registerMbiemri'], $_POST['registerUsername'], $_POST['registerEmail'], $_POST['registerPassword']);
      }
    
    ?>
        <div class="overlay">
            <div class="overlay-background"></div>
            <div class="overlay-content">
              <h1 class="main-heading">Register</h1>
              <form action="" method="POST" class="signup-form">
                <label>Name</label>
                <input id="name" placeholder="Name" name="registerEmri" type="text" >
                <label>Surname</label>
                <input id="surname" class="surname" placeholder="Surname" name="registerMbiemri" type="text" >
                <label>Username</label>
                <input id="username" class="username" placeholder="Username" name="registerUsername" type="text">
                <label >Email Address</label>
                <input id="email" class="email" placeholder="Email" type="email" name="registerEmail" required="required" >
                <label>Password</label>
                <input id="password" class="password" placeholder="Password" name="registerPassword" type="password" required="required" >
          
          
                <button type="submit" class="btn btn-outline submit-btn" name="register" onclick="validate()" style="color:white;">Register</button>
    
              </form>
            </div>
          </div>
          
          <?php include("include/footer.php") ?>
          
          <script src="js/RegisterJS.js"></script>
        </body>
</html>