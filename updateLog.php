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

?>
<!-- Basic page format -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cape Study Online | Updates</title>
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
        </header>

<?php
$sql = "SELECT * FROM update_log ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

} else {
  echo "NO RESULTS :/ (the db is probably down, sry)";
}

?>


<div class='eventTable'>

<?php 
  while($row = $result->fetch_assoc()) {
    echo  "<div class='eventBlock'>
  <h1 id='event_id'>" 
   // heading
     .$row["version"] ."</h1>"."<h1 id='event_id'> - </h1> " . "<h1 id='heading'>" .$row["heading"] ."</h1>".
    //  date
     "<h3 id='event_date'>" .$row["date"] ."</h3>".
    //  body
     " <p id='body'>" .$row["body"] ."</p> " .  "<br> <p id='author'>" .$row["publisher"] ."</p> "     ."</div>". "<br>";
}
?>



        <script src="index.js" async defer></script>
    </body>
</html>









<!-- Back Button -->
<form id="Back" method="get" action="/">
    <button class="back-button"> <span class="text">Back</span>

      <div class="icons">
        <div class="cross"></div>
        <div class="check"></div>
      </div>
    </button>
  </form>
