<!DOCTYPE html>
<html>
    <head>
<title>Products</title>
<link rel="stylesheet" type="text/css" href="css/style3.css">


    </head>
<body>

<?php include("include/header.php")?>



<form class="example" >
    <input type="text" placeholder="Search products" name="search">
    <button type="submit"><img src="foto/search.png">
    </button>
  </form>

  
  <?php
  $produktet = getProduktet();
  if($produktet){
    $i= 0;
    while($produkti = mysqli_fetch_assoc($produktet)){
      $fotoPath= $produkti['foto'];
      $emriProduktit = $produkti['emri'];
      $pershkrimiProduktit = $produkti['pershkrimi'];
      $produktiID = $produkti['produktiid'];
      $cmimiProduktit = $produkti['cmimi'];
      if($i==0){
        echo'';
      }
      echo 
          
      '
      <div class="productslist">
       <div class="card">
           <form action="addToCart.php" method="POST">
           <input type="hidden" name="produktiID" value=" '.$produktiID.'">
           <img src="foto/'.$fotoPath .'" alt="" style="width:100%">
           <h1>'.$emriProduktit.'</h1>
           <p class="price">'.$cmimiProduktit.'$</p>
           <p>'.$pershkrimiProduktit.'</p>
           <p><button name="addToCart">Add to Cart</button></p>
           </form>
         
       </div>
       
     </div>';
     
                 $i++;
                 if($i == 3){
                   echo'</div><br>';
                   $i=0;
                 }
                 if(isset($_POST['addToCart'])){
                   // getProduktet
                 }
                 
    }
  }
  


    ?>

    <div class="divi">
      <a href="Products.php" class="previous round">&#8249;</a>
      <a href="#" class="next round">&#8250;</a>
    </div>


    <?php include("include/footer.php") ?>


 
</body>
</html>
