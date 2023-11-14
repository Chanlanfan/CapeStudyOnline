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


?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cape Study Online</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="icon" href="/images/CSOlogo/logoV1.png">
        <link rel="stylesheet" href="/styles.css">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2405226533410259"
     crossorigin="anonymous"></script>
    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <h1><span class="copyright">©</span></h1>
            <div class='topnav'>
                <a href="/updateLog.php">Updates</a>

                </div>
        </header>

        <!-- <div id="incompleteNotice">
            <h2>WE ARE IN BETA</h2>
            <p>DM suggestions/comments on instagram!</p>
        </div> -->

        <!-- Home Buttons -->
<div id="HomeButtons">
    <form  method="get" action="/events.php">
        <button type="submit"><span>Events</span></button>
      </form>
      <form  method="get" action="/incoming/eduFileUpload.html">

        <button type="submit"><span>Upload File</span></button>
      </form>
</div>
<!-- Search Bar -->
<!-- <div id="searchBar"> -->
   <!-- <input type="text" placeholder="🔍 Search for: Subjects, Schools or specific work..."> -->
<!-- </div> -->

<!-- Lists -->
<div id="menuList">
   <div id="schools">
       <h2>Schools: <h2>
<div class="row">
   <div class="column">   
       <button onclick="window.location.href='/schools/SACS/sacs_high.php';">
       <img src="/images/schoolLogos/logo_SACS.jpg">
       <p>SACS HS</p>
       </button>
       </div>
    
</div>
   </div>


<hr>
<div id="indexHeading" style="text-align: center">
<h1> SPORTS</h1>
</div>
<!-- Sports list -->


   <div id="sports">
       <h2>Live Sports: (TESTING)<h2>
<div class="row">
   <div class="column">   
       <button onclick="window.location.href='/schools/SACS/sport/sacshs_sport.php';">
       <img src="/images/schoolLogos/logo_SACS.jpg">
       <p>SACS HS</p>
       </button>
       </div>
    
</div>
   </div>
   <hr>


   <!-- TOOLS -->
<div id="indexHeading" style="text-align: center">
<h1> TOOLS</h1>
</div>
      <div id="tools">
       <h2>Tools: (All WiP)<h2>
<div class="row">
   <div class="column">   
       <button onclick="window.location.href='/tools/AccJournal.html';">
       <!-- <img src="/images/schoolLogos/logo_SACS.jpg"> -->
       <p style="font-size: 18px; white-space: wrap; bottom: 10px">(WiP)<br>Accounting Journal practise</p>
       </button>
       </div>
    

       <div class="column">   
       <button onclick="window.location.href='/tools/simpleInterest.html';">
       <!-- <img src="/images/schoolLogos/logo_SACS.jpg"> -->
       <p style="font-size: 18px; white-space: wrap; bottom: 10px">(WiP)<br>Hire Purchase Loans</p>
       </button>
       </div>


</div>
   </div>
</div>








<p id="whitespace">whitespace</p>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2405226533410259"
     crossorigin="anonymous"></script>
<!-- IndexAd01 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2405226533410259"
     data-ad-slot="5614947543"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


        <script src="index.js" async defer></script>

<!-- Footer -->
<footer>
    <!-- about -->
    <p id="footerAboutHeading">About | </p>
    <p id="footerAboutText"></p>

<!-- links -->
<div id="footerLinks">
<p>links:</p>
<a href="/index.html">Home</a>
<a href="/index.html#schools">Schools</a>
<a href="/incoming/eduFileUpload.html">Upload</a>
</div>

<hr>


<!-- copyright -->
<div id="copyright">
    <p>copyright © 2023 All rights reserved by Charles Fletcher</p>
</div>


</footer>


    </body>
</html>