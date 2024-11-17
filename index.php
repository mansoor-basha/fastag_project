<?php
include("dbconnect.php");
session_start();

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
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/minimal-slider.css" type="text/css" media="all" />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <div class="mian-content">
        <!-- main image slider container -->
        <div class="slide-window">
            <div class="slide-wrapper" style="width: 300%;">
                <div class="slide">
                    <div class="slide-caption">
                    <h3>Welcome to Toll Plaza</h3>
            <p>Find toll prices for various vehicle types and plan your journey hassle-free.</p>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="">
                            Contact</a>
                        </div>

                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-caption">
                    <h3>Easy Navigation</h3>
            <p>Navigate through toll plazas with ease using our interactive map and real-time toll prices.</p>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="">
                            Contact</a>
                        </div>

                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-caption">
                    <h2>Real-time Updates</h2>
            <p>Get real-time updates on toll prices for different vehicle types and avoid surprises on your journey.</p>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="">
                            Contact</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </div>
        <!-- main image slider container -->

        <div class="header-top-w3layouts">
            <div class="container">

                <header>
                    <div class="top-head-w3-agile text-left">
                        <div class="row top-content-info-wthree">
                            <div class="col-lg-5 top-content-left">
<!--                                 <h6>Have any Quastions?</h6> -->
                            </div>
                            <div class="col-lg-7 top-content-right">
                                <div class="row">
                                    <div class="col-md-6 callnumber text-left">
                                        <!-- <h6>Call Us : <span>1234567890</span></h6> -->
                                    </div>
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                               
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="./pages/theme/page-login.php">Admin</a>
                                </li>

                            </ul>

                            <div class="log-in">
                                <a class="btn text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                    Sign In</a>
                            </div>
                        </div>

                    </nav>
                </header>
            </div>
        </div>

    </div>
   
 
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="inner-sec-w3layouts py-lg-5 py-3">
            <h3 class="tittle text-center mb-md-5 mb-4">Our Services</h3>
            <div class="row middle-grids">
                <div class="col-lg-4 about-in middle-grid-info text-center">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-car mb-2"></i>
                            <h5 class="card-title my-3">Vehicle Toll Prices</h5>
                            <p class="card-text">Find toll prices for various vehicle types, making your journey planning easier.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 about-in middle-grid-info text-center">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt mb-2"></i>
                            <h5 class="card-title my-3">Easy Navigation</h5>
                            <p class="card-text">Navigate through toll plazas with ease, knowing the prices for your vehicle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 about-in middle-grid-info text-center">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-clock mb-2"></i>
                            <h5 class="card-title my-3">Real-time Updates</h5>
                            <p class="card-text">Get real-time updates on toll prices and avoid surprises on your journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="gallery py-md-5 py-3">
        <div class="gallery-inner pb-md-5 pb-3">
            <h3 class="tittle text-center mb-md-5 mb-4">Gallery</h3>
            <ul class="portfolio-categ filter pb-5 mb-lg-3 text-center">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" title="Category 1">category 1</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" title="Category 2">category 2</a>
                </li>
                <li class="cat-item-3">
                    <a href="#" title="Category 3">category 3</a>
                </li>


            </ul>
            <ul class="portfolio-area clearfix">
                <li class="portfolio-item2" data-id="id-0" data-type="cat-item-3">
                    <span class="image-block img-hover">
                        <a class="image-zoom" href="images/g1.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g1.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g2.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g2.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="images/g3.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g3.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g4.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g4.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g5.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g5.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g6.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g6.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g7.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g7.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="images/g8.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g8.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>

  
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
    <?php
extract($_REQUEST);
if(isset($login))
	{
		$q1=mysqli_query($connect,"select * from user where username='$username' && password='$password' ");
			$n1=mysqli_num_rows($q1);
				if($n1==1)
				{
				$_SESSION['username']=$username;
                ?>
                <script language="javascript">
                    alert("Logged In");
                    window.location.href="tolldetails.php";
                </script>
                <?php
				}
				else
				{
				$msg="Invalid Username or Password!";
				}
	}
?>
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
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="mb-2">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary submit mb-4">Sign In</button>
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
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Name</label>

                                <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            

                            <button type="submit" name="register" class="btn btn-primary submit mb-4">Register</button>
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
<?php
$rdate=date("d-m-Y");
if(isset($_POST['register']))
{
   
   
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $mq=mysqli_query($connect,"select max(id) from user");
        $mr=mysqli_fetch_array($mq);
        $id=$mr['max(id)']+1;

        $ins=mysqli_query($connect,"insert into user(id,name,mobile,email,address,username,password,wallet_amount,rdate) values($id,'$name','$mobile','$email','$address','$username','$password','$wallet_amount','$rdate')");
        if($ins)
        {
            ?>
            <script>
                alert("Account Created")
            </script>
            <?php
        }
        else
        {
            ?>
           <script>
            alert("Already Exit!..");


           </script>
           <?php
        }
    }

?>
    <!--//model-form-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/minimal-slider.js"></script>
    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
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
	<!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <!--// end-smoth-scrolling -->
    <script src="js/jquery-1.7.2.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/pretty-script.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>