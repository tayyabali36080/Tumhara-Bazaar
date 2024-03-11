


<!DOCTYPE html>
<html lang="en">
<head>
  <title>APNA BAZAAR</title>
  <link rel="icon" href="ab.png" type="x-icon">
  <link rel="stylesheet" href="bootstrap1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .whatsapp{
  position: fixed;
  right:20px;
  bottom:10px;
  z-index: 1000;
}
.whatsapp p{
font-family: Rubik Doodle Triangles;
text-decoration:none;

}
 </style>
      </head>
      <body>
        <?php
      //define('MYSITE',true);  
          require_once "bootstrap3.php";
          require_once "header.php";
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        
          header("location:bootstrap2.php");
        
          exit;
         
      }
  
        ?>
      <div class="container slider  col-12"><!--START SLIDER-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="s6.jpg" width="300px" height="400px" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="s4.jpg" width="300px" height="400px"  alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="ss.jpg" width="300px" height="400px"  alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!--END SLIDER-->   
      <div class="text"><h1></h1></div><br>
      </div><br>
      <div class="container col-12"><!--START POSTCARD-->
      <div class="row">
        
      <div class="card col-lg-4 col-md-6" style="width: 18rem;">
        <img class="card-img-top" src="s1.jpg" height="250px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title my-3">Marketing</h5>
          <p class="card-text"><b>Apna Bazaar</b> <i>offers an unparalleled shopping experience, where style meets affordability. Our diverse range of products ensures that you'll always find something to elevate your lifestyle. Join us today and discover the perfect blend of quality and value at Apna Bazaar.</i></p>
         
        </div>
      </div>
      <div class="card col-lg-4 col-md-6" style="width: 18rem;">
        <img class="card-img-top" src="s3.jpg" height="250px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title my-3">Bussiness</h5>
          <p class="card-text"><b>Apna Bazaar</b> <i>is a thriving business that offers a wide range of high-quality products to meet your diverse needs. With a commitment to exceptional customer service and a passion for innovation, we strive to provide a shopping experience that exceeds your expectations.</i></p>
         
        </div>
      </div>
      <div class="card col-lg-4 col-md-6" style="width: 18rem;">
        <img class="card-img-top" src="creditcard.webp" height="250px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-titl my-3">Banking Facility</h5>
          <p class="card-text"><b>Apna Bazaar</b><i> offers comprehensive banking facilities to enhance your shopping experience. With convenient ATM services, currency exchange, and friendly customer support, we ensure seamless financial transactions during your visit. Trust Apna Bazaar for all your banking needs.</i></p>
         
        </div>
        
      </div>
      </div>
    </div><br><br><!--END POSTCARD-->
    <div class="whatsapp">
<a href="https://wa.me/923084433157?text=Hello.." target="_blank">
<img src="whatsapp.gif" width="48px" height="48px" class="rounded-circle"/>
</a>
    </div>
 <?php  
include("footer1.php");
 ?>
     
      
            
</body>
</html>