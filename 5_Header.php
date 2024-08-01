<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../Project_Online_Medical_Store_PHP/CSS/1_Style.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--icon-->

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script>$(document).ready(function () {
      $('.slider').bxSlider({ auto: true, mode: 'fade', controls: false, pager: true, touchEnabled: false, speed: 1000 });
      $('.testimonials').bxSlider({ auto: true, mode: 'horizontal', controls: false, pager: true, touchEnabled: true, speed: 600, pause: 8000 });
    });</script>

<script src="JavaScript/1_Script.js"></script>


  <!-- <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" media>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media> -->

</head>

<body>
  <header class="blue">
    <div class="container navbar-width">
    
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img
            src="../Project_Online_Medical_Store/Images/1_MEDIHEALCARE_transparent.png" alt="logo" height="100px"
            class="blue"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse white" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="1_Index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="2_About_Us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="3_Product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="4_Contact_Us.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary" href="hms/registration.php">Register / Login</a>
            </li>
            <li> 
           <a class="nav-link" href="cart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span id='cart-item'> </span></a>
          </li>
          </ul>          
        </div>

        <!-- <a href="#" class="login-link">
          <img src="Images/54_360_F_250271442_s1JYQbkJXr4yypcZ2ZTk2xEqkTnE85Zr-removebg-preview.png" alt="Login" height="100px">
        </a> -->
        
      </nav>
    </div>
  </header>