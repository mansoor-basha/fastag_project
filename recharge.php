<?php
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
$rdate=date("d-m-Y");
extract($_REQUEST);
if(isset($btn)){
    $wallet_amount=$_POST['wallet_amount'];
    $update=mysqli_query($connect, "update user set wallet_amount=wallet_amount+$wallet_amount where id='$id' and username='$username'");
    echo "update user set wallet_amount=wallet_amount+$wallet_amount where id='$id' and username='$username'";
    if($update){
        ?>
        <script>
            alert("Money added to your wallet");
            window.location.href="tolldetails.php";
        </script>
        <?php
    }
    else{
        ?>
         <script>
            alert("Money not added to your wallet");
            window.location.href="";
        </script>
        <?php
    }
    
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php include("title.php");?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Shipment a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<style>
 .container1 {
  max-width: 620px;
  margin: 150px auto 100px;
}

.card-image {
  width: 425px;
  position: absolute;
  top: -125px;
  left: 100px;
  z-index: 1;
}

.card-image-shadow {
  position: absolute;
  width: 410px;
  height: 253px;
  top: -113px;
  left: 107px;
  border-radius: 15px;
  box-shadow: -5px 10px 32px 0px #000;
  z-index: 0;
}

.form {
  border-radius: 15px;
  background-color: #fff;
  min-width: 100%;
  padding-top: 165px;
  position: relative;
  box-shadow: -5px 7px 32px 0px rgba(0, 0, 0, 0.35);
}

form {
  padding: 15px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.flex-row {
  width: 100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.flex-column {
  width: 100%;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
}

input.card-number,
input.card-name,
input.card-cvv,
input.card-amount,
table {
  width: 100%;
}

input {
  padding: 10px;
  height: 40px;
  font-size: 18px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline-color: #4183f5;
}

input:not(.card-cvv, .card-cvv, .card-submit),
table {
  margin-bottom: 20px;
}

label {
  display: block;
}

.table-column select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding-left: 15px;
  width: 40%;
  height: 40px;
  margin-right: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background: url("https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-1.png");
  background-size: 15px;
  background-repeat: no-repeat;
  background-position-x: 125px;
  background-position-y: center;
  font-size: 12px;
  outline-color: #4183f5;
}

.table-column:last-child {
  width: 40%;
}

.card-submit {
  width: 100%;
  margin: 0 auto;
  color: #fff;
  font-size: 18px;
  height: 50px;
  border: none;
  border-radius: 5px;
  background-color: #2364d2;
  transition: background-color 250ms ease-in-out;
}

.card-submit:hover {
  background-color: #4183f5;
}

</style>
</head>

<body>
    <div class="mian-content inner-page">
        <div class="header-top-w3layouts">
            <div class="container">

                <header>
                    <div class="top-head-w3-agile text-left">
                        <div class="row top-content-info-wthree">
                            <div class="col-lg-5 top-content-left">
<!--                                 <h6>Have any Quastions?</h6>
 -->                            </div>
                            <div class="col-lg-7 top-content-right">
                                <div class="row">
                                    <div class="col-md-6 callnumber text-left">
<!--                                         <h6>Call Us : <span>1234567890</span></h6>
 -->                                    </div>
                                    <div class="col-md-6 top-social-icons p-0">
                                        <ul class="social-icons d-flex justify-content-end">
                                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                            <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo text-left">
                            <h1>
                                <a class="navbar-brand" href="index.php">
                                <?php include("title.php");?></a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                              
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Home<?php echo $wallet_amount;?>
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>

                            </ul>

                            
                        </div>

                    </nav>
                </header>
            </div>
        </div>

    </div>
    <!--//banner-->
    <!-- /breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Search</li>
    </ol>
    <div class="container1">
    <div class="form">
      <form action="" method="post">
        <div class="flex-row">
          <label for="card-number">Card Number</label>
          <input name="card-number" class="card-number" name="card-number" type="text" value="">
        </div>
        <div class="flex-row">
          <label for="card-name">Holder Name</label>
          <input name="card-name" class="card-name" type="text" name="card-name" value="">
        </div>
        
        <div class="flex-row">
          <label for="card-amount">Amount</label>
          <input class="card-amount" type="text" name="wallet_amount" value="">
        </div>
        
        <div class="flex-row">
          <table>
            <tr>
              <td class="table-column">
                <label for="month">Expiration Date</label>
                <select name="month" id="month-select">
                  <option value="Month" selected disabled>Month</option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
                <select name="year" id="year-select">
                  <option value="Year" selected disabled>Year</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                </select>
              </td>
              <td class="table-column">
                <label for="card-cvv">CVV</label>
                <input name="card-cvv" class="card-cvv" type="password" value="">
              </td>
              <td class="table-column">
              <br>

                <label for="card-pin">Pin</label>
                <input name="card-pin" class="card-pin" type="password" value="">
              </td>
              
            </tr>
          </table>
        </div>
        <div class="flex-row">
            <input type="submit" class="btn btn-primary" name="btn" value="Submit">
        </div>
      </form>
      <img class="card-image" src="https://pngimg.com/uploads/credit_card/credit_card_PNG99.png" alt="Card image">
      <div class="card-image-shadow"></div>
    </div>
  </div>
    <footer class="newsletter_right_w3agile bg-dark pymd-5 py-4">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <!-- <h3 class="tittle text-center mb-md-5 mb-4 text-white">Subscribe our Newsletter</h3>
                <div class="n-right-w3ls">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="Email" placeholder=" Email Address" required="">
                        </div>

                        <div class="form-group">
                            <input class="form-control submit text-uppercase" type="submit" value="Subscribe">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div> -->
                <div class="row footer-bottom-wthree mt-lg-5 mt-3">
                    <div class="col-lg-6 copyright">
                        <h2><a class="navbar-brand" href="index.html">
                            <?php include("title.php");?></a></h2>
                        <p class="copy-right mt-3">All Rights Reserved | Design by
                            <a href=""> <?php include("title.php");?> </a>
                        </p>
                    </div>
                    <div class="col-lg-6 social-icon footer">
                        <ul class="links-nav d-flex justify-content-end">
                            <li>
                                <a class="active" href="">Home</a>
                            </li>
                            <li>
                                <a href="">About</a>
                            </li>

                            <li>
                                <a href="">Services</a>
                            </li>
                            <li>
                                <a href="">Pricing</a>
                            </li>
                            <li>
                                <a href="">Contact</a>
                            </li>
                        </ul>
                        <ul class="social-icons d-flex justify-content-end mt-3">
                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
    </footer>
    <!--//newsletter-->


    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->
    <!--//model-form-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
</body>

</html>