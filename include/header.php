<?php

ob_start();
require "include/functions.php";


?>


<header>



    <h1><a href="Home.php">14 TECH<img src="foto/../logo14.png"></a></h1>
    
    <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href ="AboutUs.php">About Us</a></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li><a href="Login.php">Log In</a></li>
        <li><a href="Register.php">Register</a></li>

</header>

<?php

if(isset($_SESSION['klienti'])){
    $clientName = $_SESSION['klienti']['emri'] . " " . $_SESSION['klienti']['mbiemri'];
    if($_SESSION['klienti']['roli'] == 1){
        $clientName.= "(Admin)";
    }
    echo '<div>
    <span style="color:white;">You are logged in as ' .$clientName. '</span>
    </div>';
}

?>

