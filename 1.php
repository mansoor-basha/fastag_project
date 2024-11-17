<?php
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
$rdate=date("d-m-Y");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Get Current Location</title>
    <style>
                .wallet-icon {
  position: relative;
  display: inline-block;
  cursor: pointer;
  transition: transform 0.3s ease-in-out, filter 0.3s; 
}



.wallet-icon:hover::before {
  opacity: 1;
}

.wallet-icon:hover {
  transform: scale(1.2); 
  filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.5)) hue-rotate(180deg);
}
.dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    border: 1px solid orange; 
    border-top: none;
    display: none;
    background-color: #ff4e00;
}

.dropdown a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: white;
    font-size: bold;
    width: 200px; 
}


        .wallet-icon:hover .dropdown {
            display: block;
        }

        .wallet-icon svg {
            fill: #ff4e00;
        }


    </style>
    </style>
    <script>
        var lat1 = 0; // Initialize with default values
        var lon1 = 0;

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            lat1 = position.coords.latitude;
            lon1 = position.coords.longitude;
            document.getElementsByName("lat")[0].value = lat1;
            document.getElementsByName("lon")[0].value = lon1;
        }

        window.onload = function() {
            getLocation();
        };
    </script>
</head>
<body>
<?php
function distance($lat1, $lon1, $lat2, $lon2) {
    $earth_radius = 6371; 

    $dlat = deg2rad($lat2 - $lat1);
    $dlon = deg2rad($lon2 - $lon1);

    // Haversine formula
    $a = sin($dlat / 2) * sin($dlat / 2) +
         cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
         sin($dlon / 2) * sin($dlon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $earth_radius * $c;

    return $distance; 
}

$lat1 = 11.9363763;
$lon1 = 79.7723282;
$lat2 = 11.9363763;
$lon2 = 79.7723282;

$distance = distance($lat1, $lon1, $lat2, $lon2);
/* echo "Distance between the two points is: " . round($distance, 2) . " km"; */


if ($distance <= 5) {
    echo '
    <div class="wallet-icon" data-amount="500">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ff4e00" class="bi bi-wallet" viewBox="0 0 16 16">
            <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a2 2 0 0 1-1-.268M1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1"/>
        </svg>
        <div class="dropdown">';
    // Assuming $username is already defined
    $q111 = mysqli_query($connect, "SELECT * FROM user where username='$username'");
    $row111 = mysqli_fetch_array($q111);
    echo '
            <a href="#">₹' . $row111['wallet_amount'] . '</a>
            
        
        </div>
    </div>';
}?>
<?php
           
 /*        }
    
    }
 else {
    echo "0 results";
}
?> */
?>

<form name="form1" method="post">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-3">
            <input type="hidden" name="lat" value="<?php echo $lat1; ?>" placeholder="Latitude">
            <input type="hidden" name="lon" value="<?php echo $lon1; ?>" placeholder="Longitude">
       
        </div>
    </div>
</form>

</body>
</html>
