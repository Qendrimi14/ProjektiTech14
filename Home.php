<html>
    <head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>

        <?php include("include/header.php")?>

        <div class="slideshow-container">
        <p>Latest Products ⇩</p>
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <a href="Products.php">
              <img src="foto/produkti1.png" style="width:100%"></a>
              <div class="text">Brand: HP <br>
                               <br>PC: OMEN 30L Gaming Desktop PC GT13-1380z <br>
                               <br>Price: 	$4,499.95<br>
                               <br> Click in the photo for more info ⓘ 
            </div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <a href="Products.php">
              <img src="foto/produkti2.png" style="width:100%"></a>
              <div class="text">Brand:	        Apple <br>
                                <br>Model:	    MacBook Air A1466 <br>
                                <br>Price: $939.95<br>
                                <br> Click in the photo for more info ⓘ 
              </div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <a href="Products.php">
              <img src="foto/produkti3.png" style="width:100%"></a>
              <div class="text">Brand: Apple<br>
                               <br> Phone:	        Apple iPhone 13 Pro Max<br>
                               <br> Price: $1,099 <br>
                               <br> Click in the photo for more info ⓘ 
                </div>
            </div>
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
  
          <?php include("include/footer.php") ?>

          <script src="js/SlideShowJS.js"></script>

          
    </body>

   
    
</html>