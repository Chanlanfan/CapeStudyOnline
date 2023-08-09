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

$sql = "SELECT * FROM profile_tags WHERE school_id = 'RBHS'";

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
        <title>Cape Study Online | RBHS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

<div id="schoolHeading">
<h1 >RBHS</h1>
<img src="/images/schoolLogos/logo_RBHS.jpg">

<!-- TODO: Modernize Tags -->
<div class="tag">
<?php
$row = $result->fetch_row();
$exampleTag = $row[1];
$videoTag = $row[2];
$photoTag = $row[3];
$pdfTag = $row[4];
$moderateTag = $row[5]
?>

<!-- EXAMPLE TAG -->
<p id="exampleTag"><?php 

    if($exampleTag== 1){
      printf("examples");
    }
    elseif($exampleTag == 0){
        ?>
        <style type="text/css">#exampleTag{
        display:none;
        }</style>
        <?php
    }
    else {
      printf("error");
    }


?></p>

<!-- VIDEOS TAG -->
<p id="videoTag"><?php 

    if($videoTag == 1){
      printf("video");
    }
    elseif($videoTag == 0){
        ?>
        <style type="text/css">#videoTag{
        display:none;
        }</style>
        <?php
    }
    else {
      printf("error");
    }


?></p>

<!-- PHOTOS TAG -->
<p id="photoTag"><?php 

    if($photoTag == 1){
      printf("photos");
    }
    elseif($photoTag == 0){
?>
<style type="text/css">#photoTag{
display:none;
}</style>
<?php
    }
    else {
      printf("error");
    }


?></p>
<!-- PDF TAG -->
<p id="pdfTag"><?php 

    if($pdfTag == 1){
      printf("PDF");
    }
    elseif($pdfTag == 0){
        ?>
        <style type="text/css">#pdfTag{
        display:none;
        }</style>
        <?php
    }
    else {
      printf("error");
    }


?></p>
<!-- PDF TAG -->
<p id="moderateTag"><?php 

    if($moderateTag == 1){
      printf("moderated");
    }
    elseif($moderateTag == 0){
        ?>
<style type="text/css">#moderateTag{
background-color: rgba(255, 50, 50, 0.7);
}</style>
<?php
      printf("unmoderated");
    }
    elseif($moderateTag == 3){
        ?>
        <style type="text/css">#moderateTag{
        display:none;
        }</style>
        <?php
    }
    else {
      printf("error");
    }


?></p>

</div>


</div>




        <script src="index.js" async defer></script>
    </body>
</html>

