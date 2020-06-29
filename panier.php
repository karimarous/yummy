
<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      } 
}
}
 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
   
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>yUmmy - Just select the food you want</title>
    <link rel="shortcut icon" type="image/png" href="./images/logoi.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

<link rel='stylesheet' href='demo/css/style1.css' type='text/css' media='all' />
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
    <script type="text/javascript" src="jspdf.debug.js"></script>
    <link rel="stylesheet" href="style1.css">
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Panier</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Panier <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


  

    
  





<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}?>



<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>  



    <div class="cart-main-area section-padding--lg bg--white">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-sm-12 ol-lg-12">
                  <form action="#">               
                      <div class="table-content table-responsive">
                          <table>
                              <thead>
                                  <tr class="title-top">
                                      <th class="product-thumbnail">Image</th>
                                      <th class="product-name">Product</th>
                                      <th class="product-quantity">QUantity</th>
                                      <th class="product-price">Price</th>
                                      <th class="product-subtotal">Total</th>
                                  </tr>
                              </thead>
                              
                              <tbody>
                       <?php 
                  foreach ($_SESSION["shopping_cart"] as $product){
                ?>
                                  <tr>                                 
                                      <td class="product-item"><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
                                      <td class="product-name"><?php echo $product["name"]; ?><br />
                    <form method='post' action=''>
                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                    <input type='hidden' name='action' value="remove" />
                    <button type='submit' class='remove'>Remove Item</button>
                    </form></td>
                                      <td class="product-quantity"><form method='post' action=''>
                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                    <input type='hidden' name='action' value="change" />
                    <select name='quantity' class='quantity' onChange="this.form.submit()">
                    <option <?php if($product["quantity"]==1) echo "selected";?>
                    value="1">1</option>
                    <option <?php if($product["quantity"]==2) echo "selected";?>
                    value="2">2</option>
                    <option <?php if($product["quantity"]==3) echo "selected";?>
                    value="3">3</option>
                    <option <?php if($product["quantity"]==4) echo "selected";?>
                    value="4">4</option>
                    <option <?php if($product["quantity"]==5) echo "selected";?>
                    value="5">5</option>
                    </select>
                    </form></td>
                                      <td class="product-price"><?php echo "$".$product["price"]; ?></td>
                                      <td class="product-subtotal"><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
                                  </tr>
         <?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
   <?php
  
}else{
 echo "<h3 style='aa'>Your cart is empty!</h3>";
 }
?>
                              </tbody>
                          </table>
                      </div>
                  </form> 
              </div>
          </div>
 
          <div class="row">
              <div class="col-lg-6 offset-lg-6">
                  <div class="cartbox__total__area">
                      <div class="cart__total__amount">
                          <span>Grand Total</span>
                          <span><?php echo "$".$total_price; ?></span>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>  
  </div>

</div>


 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


  <!-- cart-main-area end -->
    <section class="ftco-section img" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5" >
      <div class="container">
        <div class="row d-flex">
          <div  class="col-md-7 ftco-animate1 makereservation p-4 px-md-5 pb-md-5 "style="margin-left:25%;" >
            <div  class="heading-section ftco-animate1 mb-5 text-center " >
              <span class="subheading">livraison</span>
              <h2 class="mb-4">Get your food</h2>
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
                    <input type="text" id="email" class="form-control" required placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" id="phone" class="form-control" pattern="[0-9]{8}" required placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Code postale</label>
                    <input type="text" class="form-control" id="cp" required pattern="[0-9]{4}" placeholder="Code postale">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">address</label>
                    <input type="text" class="form-control" required id="address" placeholder="Address">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Ville</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="ville" required class="form-control">
                        <option value="Ariena">Ariana</option>
                        <option value="Manouba">Manouba</option>
                        <option value="Tunis">Tunis</option>
                        <option value="Ben arous">Ben arous</option>
                        <option value="Marsa">Marsa</option>
                        <option value="Bardo">Bardo</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="button" onclick="sendEmail1()" value="Make a livraison" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      

            <div class="container" style="margin-left:20%;">
        <div class="row d-flex">
          <div class="col-md-7 ftco-animate1 makereservation p-4 px-md-5 pb-md-5" style="
    margin-left: 57%;
    margin-top: -50%;
">
            <div class="heading-section ftco-animate1 mb-5 text-center">
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
                    <input type="Tel" id="phone"  placeholder="Phone"required pattern="[0-9]{8}" required class="form-control" >
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

  
      function sendEmail1() {
            var name = $("#name");
            var email = $("#email");
            var phone = $("#phone");
            var cp = $("#cp");
            var address = $("#address");
            var ville = $("#ville");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(cp)) {          
                $.ajax({
                   url: 'sendmail2.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       phone: phone.val(),
                       cp: cp.val(),
                       address: address.val(),
                       ville: ville.val()
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