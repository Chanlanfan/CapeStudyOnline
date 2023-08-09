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
echo "<p id='checkMySQL'>Connected successfully</p>";

$sql = "SELECT * FROM profile_tags WHERE school_id = 'SACH'";

$result = $conn->query($sql);
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
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
            <h1><span class="copyright">©</span></h1>
            <div id="lastModified">
                <script>
                  const date = new
                Date(document.lastModified);
                document.getElementById("lastModified").innerHTML = "Last updated: "+date.getHours() + ":" + date.getMinutes()+ ":" + date.getSeconds() + " (" + date.getDate() + "/" + date.getMonth() + ")";
                </script></div>
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

    </body>
</html>

