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

$sql = "SELECT * FROM sport_wpolo";
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


    </head>
    <body>
<div id="sport-scores"> <!-- parent -->
<div class="top-sport"><!-- Top Scores -->
<?php 
$sql = "SELECT * FROM sport_wpolo WHERE priority = '1'   ORDER BY id DESC LIMIT 1 ";
$result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    $game_status = $row["game_status"]; //Getting Game Status
    echo  "<div class='top-sport-heading'>";
    echo  "<p id='start-time-top-sport'>".$row["start_time"]."</p>";
    echo  "<p id='age-group-top-sport'>- ".$row["team"]." -</p>";


  echo "<h1 id='home-team'>";
   // heading
     echo $row["home_team"] ." - " .$row["home_score"] ."</h1>"."<h1 id='away-team'>".$row["away_score"] ." - ".$row["away_team"] . " </h1> ";
    //  game status
    ?> <div class='game-status'>
<?
    if($game_status == 'live'){
      echo " <p id='game-status-live'></p>" ;
    }
    else if($game_status == 'Full Time'){
      echo "Full Time";
    }
    else{
      echo "Full Time<br>Not Confirmed...";
    }
    
    ?></div><?
    //  body
     " <p id='body'>" .$row["body"] ."</p> " .  "<br> <p id='author'>" .$row["author"] ."</p> "     ."</div>". "<br>";
}
?>
</div> <!-- top-scores -->




<div id="other-scores"> <!-- Parent -->
<div id="score-card"> <!--  -->
<? $sql2 = "SELECT * FROM sport_wpolo  ORDER BY CASE WHEN game_status = 'live' THEN 1 ELSE 2 END, id DESC ";
$result2 = $conn->query($sql2);
  while($row = $result2->fetch_assoc()) {
?>
<div class="score-container"> <!-- Child -->
<div id="heading">
 <div id="time">  <!-- Time -->
 <?
echo "<p>".$row["start_time"]."</p>";

?>
</div>
<div id="teams">
<?
//TEAMS
    echo  "<p id='age-group'>- ".$row["team"]." -</p>";
?>


</div>

<div id="game-status"> <!-- Teams -->
 <?
if($row["game_status"] == 'live') {
  echo "<p id='game-status-live'></p>";
}
else {
  echo "<p id='game-status-ft'>FT</p>";
}
?> 
</div><!-- game-status -->

</div> <!-- heading -->

<div id="body">
<div id="team-scores">
<?
echo "<p id='team-scores'>".$row["home_team"]. " - " .$row["home_score"]. " • ".$row["away_score"]. " - ".$row["away_team"]. "</p>";
?>
</div> <!-- team-scores -->
</div> <!-- body -->
</div><? }?> <!-- score-container -->
</div> <!-- score-card -->
</div> <!-- other-scores -->


</div> <!-- sport-scores -->





        <script>
          if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
        </script>
    </body>

</html>

