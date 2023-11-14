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
        <link rel="stylesheet" href="/styles.css">
        
    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
<div id="uploadFilePHP">
        <?php
           // Taking all 5 values from the form data(input)
        $title=  $_REQUEST['title'];
        $file_name = $_REQUEST['file_name'];
        $link =  $_REQUEST['link'];
        $school_code = $_REQUEST['school_code'];
        $subject_code = $_REQUEST['subject_code'];
        $publisher = $_REQUEST['publisher'];
        $author = $_REQUEST['author'];
        $grade = $_REQUEST['grade'];
        $term = $_REQUEST['term'];
        $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO educational_files  (title, file_name, link, school_code, subject_code, grade, term, publisher, author, email )VALUES ('$title',
            '$file_name','$link','$school_code', '$subject_code', '$grade', '$term', '$publisher', '$author', '$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3> data stored in a database successfully!"
            ;
 
            // echo nl2br("\n$title\n $file_name\n "
            //     . "$link\n $school_code\n $subject_code\n $publisher");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
         ?>
</div>
<p>You should be automatically redirected in <span id="seconds">3</span> seconds.
</p>
<script>
    // Countdown timer for redirecting to another URL after several seconds

var seconds = 3; // seconds for HTML
var foo; // variable for clearInterval() function

function redirect() {
    document.location.href = 'https://capestudy.online';
}

function updateSecs() {
    document.getElementById("seconds").innerHTML = seconds;
    seconds--;
    if (seconds == -1) {
        clearInterval(foo);
        redirect();
    }
}

function countdownTimer() {
    foo = setInterval(function () {
        updateSecs()
    }, 1000);
}

countdownTimer();
</script>
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
</div>

<hr>


<!-- copyright -->
<div id="copyright">
    <p>copyright © 2023 All rights reserved by Charles Fletcher</p>
</div>


</footer>
    </body>
</html>
