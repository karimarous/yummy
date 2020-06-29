<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `sandwich` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$result1 = mysqli_query($con,"SELECT * FROM `pizza` WHERE `code`='$code'");
$row1 = mysqli_fetch_assoc($result1);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$result2 = mysqli_query($con,"SELECT * FROM `salade` WHERE `code`='$code'");
$row2 = mysqli_fetch_assoc($result2);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$result3 = mysqli_query($con,"SELECT * FROM `plat` WHERE `code`='$code'");
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
        <a class="navbar-brand" href="index.php"><img src="./images/logo4.png" style="width: 30%;"> </a>
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
    
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">yUmmy</span>
              <h1 class="mb-4">Best Restaurant</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">yUmmy</span>
              <h1 class="mb-4">Nutritious &amp; Tasty</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">yUmmy</span>
              <h1 class="mb-4">Delicious Specialties</h1>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="featured">
              <div class="row">
                <div class="col-md-3">
                  <div class="featured-menus ftco-animate">
                    <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
                    <div class="text text-center">
                      <h3>Grilled Beef with potatoes</h3>
                      <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="featured-menus ftco-animate">
                    <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
                    <div class="text text-center">
                      <h3>Grilled Beef with potatoes</h3>
                      <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="featured-menus ftco-animate">
                    <div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
                    <div class="text text-center">
                      <h3>Grilled Beef with potatoes</h3>
                      <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="featured-menus ftco-animate">
                    <div class="menu-img img" style="background-image: url(images/breakfast-4.jpg);"></div>
                    <div class="text text-center">
                      <h3>Grilled Beef with potatoes</h3>
                      <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    

    

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
            <h2 class="mb-4">Catering Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Birthday Party</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Business Meetings</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Wedding Party</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
                        <div><h3 class="mb-4">sandwich</h3> 
                            <img src="images/s.png" style="width: 7%;">
                         </div>
          </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">


<?php
$result = mysqli_query($con,"SELECT * FROM `sandwich`");
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
    </section>
    
      <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <div>
              <h3 class="mb-4">Pizza</h3>
              <img src="./images/p.png" style="width: 6%;">
            </div>
          </div>
        </div>
                <div class="row no-gutters d-flex align-items-stretch">


<?php
$result1 = mysqli_query($con,"SELECT * FROM `pizza`");
while($row = mysqli_fetch_assoc($result1)){
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
    </section>
        <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <div>
              <h3 class="mb-4">Salade</h3>
              <img src="./images/sa.png" style="width: 8%;">
            </div>
          </div>
        </div>
          <div class="row no-gutters d-flex align-items-stretch">


<?php
$result2 = mysqli_query($con,"SELECT * FROM `salade`");
while($row = mysqli_fetch_assoc($result2)){
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
    </section>
        <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h3 class="mb-4">Plat</h3>
            <img src="./images/pl.png" style="width: 7%;">
          </div>
        </div>
                       <div class="row no-gutters d-flex align-items-stretch">


<?php
$result3 = mysqli_query($con,"SELECT * FROM `plat`");
while($row = mysqli_fetch_assoc($result3)){
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
                  <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
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
    </section>
    <section class="ftco-section img" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
            <div class="heading-section ftco-animate mb-5 text-center">
              <span class="subheading">Book a table</span>
              <h2 class="mb-4">Make Reservation</h2>
            </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" id="name" class="form-control" required placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="Email" id="email" class="form-control" required placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="tel" id="phone"  placeholder="Phone"required pattern="[0-9]{8}" required class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="text" id="date" class="form-control" required id="date" placeholder="Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" required id="time" placeholder="Time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label f8or="">Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="person" resuired class="form-control">
                        <option value="">Person</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4+">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="button" onclick="sendEmail()" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
         <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var phone = $("#phone");
            var date = $("#date");
            var time = $("#time");
            var person = $("#person");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(date)) {
                $.ajax({
                   url: 'sendmail1.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       phone: phone.val(),
                       date: date.val(),
                       time: time.val(),
                       person: person.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    
    
    
    
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">yUmmy </h2>
              <p>Contactez-nous sur :</p>
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
          
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
   &copy;<script>document.write(new Date().getFullYear());</script><i class="icon-heart" aria-hidden="true"></i> by Ahlem Zheni & Karim Arous <a href="https://colorlib.com" target="_blank"></a>
  </p>
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