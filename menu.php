<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `breakfast` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$result1 = mysqli_query($con,"SELECT * FROM `lunch` WHERE `code`='$code'");
$row1 = mysqli_fetch_assoc($result1);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$result2 = mysqli_query($con,"SELECT * FROM `dinner` WHERE `code`='$code'");
$row2 = mysqli_fetch_assoc($result2);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$result3 = mysqli_query($con,"SELECT * FROM `drinks` WHERE `code`='$code'");
$row3 = mysqli_fetch_assoc($result3);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$result2 = mysqli_query($con,"SELECT * FROM `deserts` WHERE `code`='$code'");
$row2 = mysqli_fetch_assoc($result2);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$result3 = mysqli_query($con,"SELECT * FROM `wine` WHERE `code`='$code'");
$row3 = mysqli_fetch_assoc($result3);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];


$cartArray = array(
  $code=>array(
  'name'=>$name,
  'code'=>$code,
  'price'=>$price,
  'quantity'=>1,
  'image'=>$image)
);


if(empty($_SESSION["shopping_cart"])) {
  $_SESSION["shopping_cart"] = $cartArray;
  $status = "<div class='box'>Product is added to your cart!</div>";
}else{
  $array_keys = array_keys($_SESSION["shopping_cart"]);
  if(in_array($code,$array_keys)) {
    $status = "<div class='box' style='color:red;'>
    Product is already added to your cart!</div>";  
  } else {
  $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
  $status = "<div class='box'>Product is added to your cart!</div>";
  }

  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Yummy - Just select the food you want</title>
  <link rel="shortcut icon" type="image/png" href="./images/logoi.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="py-1 bg-black top">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">+216 79 524 687</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">yummyrestaurant@gmail.com</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="./images/logo4.png" style="width: 30%;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="livr.php" class="nav-link"><img src="./images/meal.png" id="add"></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4"style="margin-left=0px;">
            <h1 class="mb-2 bread">Specialties</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="ftco-search">
          <div class="row">
            <div class="col-md-12 nav-link-wrap">
              <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Breakfast</a>

                <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>

                <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>

                <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Drinks</a>

                <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Desserts</a>

                <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Wine</a>

              </div>
            </div>
            <div class="col-md-12 tab-wrap">
              
              <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                  
                  <div class="row no-gutters d-flex align-items-stretch">
                  
                  <?php
$result = mysqli_query($con,"SELECT * FROM `breakfast`");
while($row = mysqli_fetch_assoc($result)){
          echo "<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
          <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img' style='background-image: url(".$row['image'].");'></div>
              <div class='text d-flex align-items-center'>
                <div>
                  <div class='d-flex'>
                    <div class='one-half'>
                      <h3>".$row['name']."</h3>
                    </div>
                    <div class='one-forth'>
                      <span class='price'>$".$row['price']."</span>
                    </div>
                  </div>
                  <p><button type='submit' class='buy' ><img  src='./images/selectmeal2.png' style='    width: 149%; MARGIN-TOP: 38%; margin-left: 269%; '  ></button></p>
                </div>
              </div>
            </div>
          </form>
          </div>";
        }

?>
                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                  <div class="row no-gutters d-flex align-items-stretch">
                    
                     <?php
$result = mysqli_query($con,"SELECT * FROM `lunch`");
while($row = mysqli_fetch_assoc($result)){
          echo "<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
          <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img' style='background-image: url(".$row['image'].");'></div>
              <div class='text d-flex align-items-center'>
                <div>
                  <div class='d-flex'>
                    <div class='one-half'>
                      <h3>".$row['name']."</h3>
                    </div>
                    <div class='one-forth'>
                      <span class='price'>$".$row['price']."</span>
                    </div>
                  </div>
                  <p><button type='submit' class='buy'><img  src='./images/selectmeal2.png' style='    width: 149%; MARGIN-TOP: 38%; margin-left: 269%; '  ></button></p>
                </div>
              </div>
            </div>
          </form>
          </div>";
        }

?>
                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                  <div class="row no-gutters d-flex align-items-stretch">
                     <?php
$result = mysqli_query($con,"SELECT * FROM `dinner`");
while($row = mysqli_fetch_assoc($result)){
          echo "<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
          <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img' style='background-image: url(".$row['image'].");'></div>
              <div class='text d-flex align-items-center'>
                <div>
                  <div class='d-flex'>
                    <div class='one-half'>
                      <h3>".$row['name']."</h3>
                    </div>
                    <div class='one-forth'>
                      <span class='price'>$".$row['price']."</span>
                    </div>
                  </div>
                  <p><button type='submit' class='buy'><img  src='./images/selectmeal2.png' style='    width: 149%; MARGIN-TOP: 38%; margin-left: 269%; '  ></button></p>
                </div>
              </div>
            </div>
          </form>
          </div>";
        }

?>
                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                  <div class="row no-gutters d-flex align-items-stretch">
                     <?php
$result = mysqli_query($con,"SELECT * FROM `drinks`");
while($row = mysqli_fetch_assoc($result)){
          echo "<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
          <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img' style='background-image: url(".$row['image'].");'></div>
              <div class='text d-flex align-items-center'>
                <div>
                  <div class='d-flex'>
                    <div class='one-half'>
                      <h3>".$row['name']."</h3>
                    </div>
                    <div class='one-forth'>
                      <span class='price'>$".$row['price']."</span>
                    </div>
                  </div>
                  <p><button type='submit' class='buy'><img  src='./images/selectmeal2.png' style='    width: 149%; MARGIN-TOP: 38%; margin-left: 269%; '  ></button></p>
                </div>
              </div>
            </div>
          </form>
          </div>";
        }

?>
                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
                  <div class="row no-gutters d-flex align-items-stretch">
 <?php
$result = mysqli_query($con,"SELECT * FROM `deserts`");
while($row = mysqli_fetch_assoc($result)){
          echo "<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
          <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img' style='background-image: url(".$row['image'].");'></div>
              <div class='text d-flex align-items-center'>
                <div>
                  <div class='d-flex'>
                    <div class='one-half'>
                      <h3>".$row['name']."</h3>
                    </div>
                    <div class='one-forth'>
                      <span class='price'>$".$row['price']."</span>
                    </div>
                  </div>
                  <p><button type='submit' class='buy'><img  src='./images/selectmeal2.png' style='    width: 149%; MARGIN-TOP: 38%; margin-left: 269%; '  ></button></p>
                </div>
              </div>
            </div>
          </form>
          </div>";
        }

?>                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
                  <div class="row no-gutters d-flex align-items-stretch">
                   <?php
$result = mysqli_query($con,"SELECT * FROM `wine`");
while($row = mysqli_fetch_assoc($result)){
          echo "<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
          <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img' style='background-image: url(".$row['image'].");'></div>
              <div class='text d-flex align-items-center'>
                <div>
                  <div class='d-flex'>
                    <div class='one-half'>
                      <h3>".$row['name']."</h3>
                    </div>
                    <div class='one-forth'>
                      <span class='price'>$".$row['price']."</span>
                    </div>
                  </div>
                  <p><button type='submit' class='buy'><img  src='./images/selectmeal2.png' style='    width: 149%; MARGIN-TOP: 38%; margin-left: 269%; '  ></button></p>
                </div>
              </div>
            </div>
          </form>
          </div>";
        }
mysqli_close($con);
?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">yUmmy</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
                </a>
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
                </a>
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
                </a>
              </div>
              <div class="thumb d-flex">
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
                </a>
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
                </a>
                <a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>