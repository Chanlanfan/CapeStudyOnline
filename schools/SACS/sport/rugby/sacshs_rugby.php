<?php
$servername = "92.205.12.118";
$username = "chanlanfan";
$password = "Minecraft1234";
$databaseName = "CapeStudyOnline";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databaseName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query($sql);

$sql = "SELECT * FROM sport_rugby WHERE game_status = 'live' OR game_status = 'top'  ORDER BY id DESC LIMIT 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

} else {

}

?>
<!-- Basic page format -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html class="schoolPage">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cape Study Online | SACS HS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/images/CSOlogo/logoV1.png">
        <link rel="stylesheet" href="/styles.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script type="text/javascript">
    function doRefresh(){
        // jQuery("#sport-scores-loaded").load("sacshs_sport_BE.php");

    }
    jQuery(function() {
        // setInterval(doRefresh, 5000);
        jQuery("#sport-scores-loaded").load("sacshs_rugby_BE.php");
    });
</script>

    </head>
    <body>
        <header>

            <h1><span class="copyright">©</span></h1>
<!-- Back Button -->
<form id="Back" method="get" action="/">
    <button class="back-button"> <span class="text">Back</span>

      <div class="icons">
        <div class="cross"></div>
        <div class="check"></div>
      </div>
    </button>
  </form>
        </header>

<div id="schoolHeading">
<h1 >SACS</h1>
<img src="/images/schoolLogos/logo_SACS.jpg">
</div>
<div id="sport-scores-loaded">
  </div>
    </body>

</html>

