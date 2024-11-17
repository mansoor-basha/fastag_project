<?php
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
$rdate=date("d-m-Y");
extract($_REQUEST);
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
    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #f0f0f0;
    }

    th {
        background-color: #ff4e00;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    tr:hover {
        background-color: #f9f9f9;
    }

    td {
        color: #333;
    }

    .success {
        color: #28a745;
    }

    .warning {
        color: #ffc107;
    }

    .error {
        color: #dc3545;
    }

    .action-btn {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .action-btn:hover {
        background-color: #0056b3;
    }
    .wallet-icon {
  position: relative;
  display: inline-block;
  cursor: pointer;
  transition: transform 0.3s ease-in-out, filter 0.3s; /* Add filter transition */
}

.wallet-icon::before {
  content: attr(data-amount);
  position: absolute;
  bottom: 100%;
  left: 50%;
  transform: translateX(-50%);
  background-color: #333;
  color: #fff;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 14px;
  opacity: 0;
  transition: opacity 0.3s;
}

.wallet-icon:hover::before {
  opacity: 1;
}

.wallet-icon:hover {
  transform: scale(1.2); /* Increase size on hover */
  filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.5)) hue-rotate(180deg); /* Add shadow and color change on hover */
}
#myIframe {
            border: none;
            background: none;
        }

</style>
<script>
        function reloadIframe() {
            var iframe = document.getElementById('myIframe');
            var url = iframe.src;
            iframe.src = url; // Reload iframe
        }

        // Reload iframe every 5 seconds
        setInterval(reloadIframe, 5000);
    </script>
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
                                    <a class="nav-link" href="">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"><iframe id="myIframe" src="1.php" width="" height=""></iframe></a>

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
    <!-- //breadcrumb -->
    <!--/pricing -->
    <div class="bg-dark">
        <br><br><br><br>
    <h3 class="tittle text-center mb-md-5 mb-4 text-white">Search Toll Plaza</h3>
                <div class="n-right-w3ls">
                    <form action="" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="source" placeholder="Source" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="destination" placeholder="Destination" required="">
                        </div>

                        <div class="form-group">
                            <input class="form-control submit text-uppercase" name="btn" type="submit" value="Search">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <br><br><br><br><br>

                <?php
                extract($_POST);
                if(isset($btn)){
                   

                                        $q11 = mysqli_query($connect, "SELECT * FROM toll_details where Source='$source' && Destination='$destination' || Source='$destination' && Destination='$source'");
                                        $row=mysqli_fetch_array($q11);
                                        $n11 = mysqli_num_rows($q11);

                                        if ($n11 > 0) {


               ?>
            
                
                </div>
    <section class="pricing py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <!--/row-one-->
                <div class="row">
                    <div class="col-lg-6 price-left mt-lg-5 mt-2">
                        <h3 class="tittle text-left mb-md-5 mb-4">Toll Details</h3>
                        <table>
        <tr>
            <th>State</th>
            <th>NH NO</th>
            <th>Toll Plaza Name	</th>
            <th>Toll Plaza Location</th>
            <th>Section / Stretch</th>
            	
        </tr>

        <tr>
            <td class="success center"><?php echo $row['State'];?></td>

            <td><?php echo $row['nhno'];?></td>
            <td class="warning center"><?php echo $row['Toll Plaza Name'];?></td>
            <td><?php echo $row['Toll Plaza Location'];?></td>
            <td><?php echo $row['Section / Stretch'];?></td>
            
        </tr>
       
    </table>

                    </div>
                    <div class="col-lg-6 price-right">

                        <div class="tabs">
                            <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">2</a>
                                </li>
                               

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="menu-grids mt-4">
                                        <div class="row t-in">
                                            <div class="col-md-6 price-main-info text-center">
                                                <div class="price-inner card box-shadow">

                                                    <div class="card-body">
                                                        <?php
                                                        
                                                         $q12 = mysqli_query($connect, "SELECT * FROM toll_price where id='".$row['id']."' and type='Car/Jeep/Van'");
                                                         $row1=mysqli_fetch_array($q12);
                                                        ?>
                                                        <h4 class="text-uppercase mb-3">Car/Jeep/Van</h4>
                                                        <h5 class="card-title pricing-card-title">
<!--                                                             <span class="align-top">$</span>30 -->

                                                        </h5>
                                                        <ul class="list-unstyled mt-3 mb-4">
                                                            <li>Single Way -<?php echo $row1['single'];?></li>
                                                            <li>Double Way - <?php echo $row1['double'];?></li>
                                                            <li>Monthly - <?php echo $row1['monthly'];?></li>
                                                            <li>Registered Vehicle - <?php echo $row1['rv'];?></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 price-main-info text-center">
                                                <div class="price-inner card box-shadow">

                                                    <div class="card-body">
                                                        <h4 class="text-uppercase mb-3">LCV</h4>
                                                        <?php
                                                        
                                                        $q13 = mysqli_query($connect, "SELECT * FROM toll_price where id='".$row['id']."' and type='LCV'");
                                                        $row2=mysqli_fetch_array($q13);
                                                       ?>
                                                        <h5 class="card-title pricing-card-title">

                                                        </h5>
                                                        <ul class="list-unstyled mt-3 mb-4">
                                                        <li>Single Way -<?php echo $row2['single'];?></li>
                                                            <li>Double Way - <?php echo $row2['double'];?></li>
                                                            <li>Monthly - <?php echo $row2['monthly'];?></li>
                                                            <li>Registered Vehicle - <?php echo $row2['rv'];?></li>
                                                        </ul>
                                                       <!--  <div class="log-in mt-md-3 mt-2">
                                                            <a class="btn text-uppercase" href="single.html">
                                                        Read More</a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="menu-grids mt-4">
                                        <div class="row t-in">
                                            <div class="col-md-6 price-main-info text-center">
                                                <div class="price-inner card box-shadow">

                                                    <div class="card-body">
                                                        <h4 class="text-uppercase mb-3">Bus/Truck</h4>
                                                        <?php
                                                        
                                                        $q14 = mysqli_query($connect, "SELECT * FROM toll_price where id='".$row['id']."' and type='Bus/Truck'");
                                                        $row3=mysqli_fetch_array($q14);
                                                       ?>
                                                        <h5 class="card-title pricing-card-title">

                                                        </h5>
                                                        <ul class="list-unstyled mt-3 mb-4">
                                                        <li>Single Way -<?php echo $row3['single'];?></li>
                                                            <li>Double Way - <?php echo $row3['double'];?></li>
                                                            <li>Monthly - <?php echo $row3['monthly'];?></li>
                                                            <li>Registered Vehicle - <?php echo $row3['rv'];?></li>
                                                        </ul>
                                                        <!-- <div class="log-in mt-md-3 mt-2">
                                                            <a class="btn text-uppercase" href="single.html">
                                                        Read More</a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 price-main-info text-center">
                                                <div class="price-inner card box-shadow">

                                                    <div class="card-body">
                                                        <h4 class="text-uppercase mb-3">Upto 3 Axle</h4>
                                                        <?php
                                                        
                                                        $q15 = mysqli_query($connect, "SELECT * FROM toll_price where id='".$row['id']."' and type='Upto 3 Axle'");
                                                        $row4=mysqli_fetch_array($q15);
                                                       ?>
                                                        <h5 class="card-title pricing-card-title">

                                                        </h5>
                                                        <ul class="list-unstyled mt-3 mb-4">
                                                        <li>Single Way -<?php echo $row4['single'];?></li>
                                                            <li>Double Way - <?php echo $row4['double'];?></li>
                                                            <li>Monthly - <?php echo $row4['monthly'];?></li>
                                                            <li>Registered Vehicle - <?php echo $row4['rv'];?></li>
                                                        </ul>
                                                        <!-- 
                                                        <div class="log-in mt-md-3 mt-2">
                                                            <a class="btn text-uppercase" href="single.html">
                                                        Read More</a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--//row-one-->
                <!--row-two-->
                <div class="row mt-lg-5 mt-3">

                    <div class="col-lg-6 price-right">

                        <div class="tabs">
                            <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home1" role="tab" aria-controls="pills-home" aria-selected="true">3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile" aria-selected="false">4</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="menu-grids mt-4">
                                        <div class="row t-in">
                                            <div class="col-md-6 price-main-info text-center">
                                                <div class="price-inner card box-shadow">

                                                    <div class="card-body">
                                                        <h4 class="text-uppercase mb-3">4 to 6 Axle	</h4>
                                                        <?php
                                                        
                                                        $q16 = mysqli_query($connect, "SELECT * FROM toll_price where id='".$row['id']."' and type='4 to 6 Axle'");
                                                        $row5=mysqli_fetch_array($q16);
                                                       ?>
                                                        <h5 class="card-title pricing-card-title">

                                                        </h5>
                                                        <ul class="list-unstyled mt-3 mb-4">
                                                        <li>Single Way -<?php echo $row5['single'];?></li>
                                                            <li>Double Way - <?php echo $row5['double'];?></li>
                                                            <li>Monthly - <?php echo $row5['monthly'];?></li>
                                                            <li>Registered Vehicle - <?php echo $row5['rv'];?></li>
                                                        </ul>
                                                        <!-- <div class="log-in mt-md-3 mt-2">
                                                            <a class="btn text-uppercase" href="single.html">
                                                        Read More</a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 price-main-info text-center">
                                                <div class="price-inner card box-shadow">

                                                    <div class="card-body">
                                                        <h4 class="text-uppercase mb-3">HCM/EME</h4>
                                                        <?php
                                                        
                                                        $q17 = mysqli_query($connect, "SELECT * FROM toll_price where id='".$row['id']."' and type='HCM/EME'");
                                                        $row6=mysqli_fetch_array($q17);
                                                       ?>
                                                        <h5 class="card-title pricing-card-title">

                                                        </h5>
                                                        <ul class="list-unstyled mt-3 mb-4">
                                                        <li>Single Way -<?php echo $row6['single'];?></li>
                                                            <li>Double Way - <?php echo $row6['double'];?></li>
                                                            <li>Monthly - <?php echo $row6['monthly'];?></li>
                                                            <li>Registered Vehicle - <?php echo $row6['rv'];?></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="menu-grids mt-4">
                                        <div class="row t-in">
                                            <div class="col-md-6 price-main-info text-center">
                                                <div class="price-inner card box-shadow">

                                                    <div class="card-body">
                                                        <h4 class="text-uppercase mb-3">7 or more Axle</h4>
                                                        <?php
                                                        
                                                        $q18 = mysqli_query($connect, "SELECT * FROM toll_price where id='".$row['id']."' and type='7 or more Axle'");
                                                        $row7=mysqli_fetch_array($q18);
                                                       ?>
                                                        <h5 class="card-title pricing-card-title">

                                                        </h5>
                                                        <ul class="list-unstyled mt-3 mb-4">
                                                        <li>Single Way -<?php echo $row7['single'];?></li>
                                                            <li>Double Way - <?php echo $row7['double'];?></li>
                                                            <li>Monthly - <?php echo $row7['monthly'];?></li>
                                                            <li>Registered Vehicle - <?php echo $row7['rv'];?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 price-left mt-lg-5 mt-2">
                        <h3 class="tittle text-left mb-md-5 mb-4">Your Wallet Amount</h3>
                        <?php
                         $q111 = mysqli_query($connect, "SELECT * FROM user where username='$username'");
                         $row111=mysqli_fetch_array($q111);
                        ?>
                        
                        <h4><?php echo $row111['wallet_amount'];?></h4>
                        <br>
                        
                        <a class="success center" href="recharge.php?id=<?php echo $row111['id'];?>">Recharge</a>
                    </div>
                </div>
                <!--//row-two-->
            </div>
        </div>
    </section>
    <?php
                                        }
                                        else{
                                            echo "0 Data";
                                        }
                                    }
                                    else{
                                        echo "";
                                    }
                                        ?>

                                       <!--  <?php
                                        function distance($lat1, $lon1, $lat2, $lon2) {
                                            $earth_radius = 6371; 
                                        
                                            $dlat = deg2rad($lat2 - $lat1);
                                            $dlon = deg2rad($lon2 - $lon1);
                                        
                                            $a = sin($dlat / 2) * sin($dlat / 2) +
                                                 cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
                                                 sin($dlon / 2) * sin($dlon / 2);
                                            $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
                                            $distance = $earth_radius * $c;
                                        
                                            return $distance; 
                                        }
                                        
                                        $lat1 = 10.8348825;
                                        $lon1 = 78.6931424;
                                        $lat2 = 10.7534301;
                                        $lon2 = 78.8118183;
                                        
                                        $distance = distance($lat1, $lon1, $lat2, $lon2);
                                        if ($distance <= 5) {
                                            echo "Distance between the two points is: " . round($distance, 2) . " km";
                                        }
                                        

                                        ?> -->
    <!-- //pricing -->
    <!--/newsletter-->

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