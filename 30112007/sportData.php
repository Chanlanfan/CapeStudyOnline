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

$sql = "SELECT * FROM profile_tags WHERE school_id = 'SACH'";

$result = $conn->query($sql);

$sql = "SELECT * FROM sports_events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

} else {
  echo "NO RESULTS :/ (the db is probably down, sry)";
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
        <!-- Update Game -->
<div id="update-game">
<form action="" method="post">
<p>
                            <label for="id">GAME ID:</label>
                            <input type="text" name="id" id="id">
                         </p>      
             <p>
                            <label for="home_team">Home Team:</label>
                            <input type="text" name="home_team" id="home_team">
                         </p>
              
                          
             <p>
                            <label for="away_team">Away Team:</label>
                            <input type="text" name="away_team" id="away_team">
                         </p>
                         <p>
                            <label for="home_score">Home Score:</label>
                            <input type="text" name="home_score" id="home_score">
                         </p>
              
                          
             <p>
                            <label for="away_score">Away Score:</label>
                            <input type="text" name="away_score" id="away_score">
                         </p>
                          
             <p>
                            <label for="venue">venue:</label>
                            <input type="text" name="venue" id="venue">
                         </p>
              
                          
                         <p>
                             <label for="venue_sub">Field: </label>
                             <input type="text" name="venue_sub" id="venue_sub">
                          </p>
              
                          
              
                         <input id="submit" type="submit" value="Submit">
                      </form>
</div>
<?php
           // Taking all 5 values from the form data(input)
           $id=  $_REQUEST['id'];
           $home_team=  $_REQUEST['home_team'];
        $away_team = $_REQUEST['away_team'];
        $home_score =  $_REQUEST['home_score'];
        $away_score = $_REQUEST['away_score'];
        $venue = $_REQUEST['venue'];
        $venue_sub = $_REQUEST['venue_sub'];

         
        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE sports_events SET away_score = $away_score
        WHERE id = $id; ";
         
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


<!-- Create Game -->
<div id="create-game">

</div>


        
    </body>

</html>

