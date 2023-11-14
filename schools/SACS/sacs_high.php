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

<div id="schoolHeading">
<h1 >SACS</h1>
<img src="/images/schoolLogos/logo_SACS.jpg">
</div>
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
      printf("tags:");
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
<!-- MODERATE TAG -->
<p id="moderateTag"><?php 

    if($moderateTag == 1){
              ?>
<style type="text/css">#moderateTag{
background-color: rgba(50, 255, 50, 0.7);
}</style>
<?php
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
<!-- LOCK TAG -->
<p id="lockTag"><?php 

    if($moderateTag == 1){
      printf("unlocked");
              ?>
<style type="text/css">#lockTag{
    background-color: rgba(51, 255, 0, 0.263);

}</style>
<?php
    }
    elseif($moderateTag == 0){
        ?>
<style type="text/css">#lockTag{
background-color: rgba(255, 50, 50, 0.7);
}</style>
<?php
      printf("locked");
    }
    elseif($moderateTag == 3){
        ?>
        <style type="text/css">#lockTag{
        display:none;
        }</style>
        <?php
    }
    else {
      printf("error");
    }


?></p>

</div>


<!-- SACS EVENT-->
<div id="event-open-btn"><button onclick="openNav()"> Open Events</button></div>

<div id='school-events'>

<div id="event-close-btn"><button onclick="closeNav()"> Close Events</button></div>

<?php 
$sql = "SELECT * FROM event_list WHERE tag = 'SACS' ORDER BY id DESC";
$result = $conn->query($sql);

while($row_event = $result->fetch_assoc()) {
  echo  "<div class='eventBlock'>
<h1 id='event_id'>" 
 // heading
   .$row_event["id"] ."</h1>"."<h1 id='event_id'> - </h1> " . "<h1 id='heading'>" .$row_event["heading"] ."</h1>".
  //  date
   "<h3 id='event_date'>" .$row_event["date"] ."</h3>".
  //  body
   " <p id='body'>" .$row_event["body"] ."</p> " .  "<br> <p id='author'>" .$row_event["author"] ."</p> "     ."</div>". "<br>";

}
?>

</div>

<script>
function openNav() {
  document.getElementById("school-events").style.width = "80vw";
  document.getElementById("school-events").style.visibility = "visible";
 document.getElementById("event-close-btn").style.visibility = "visible";

  document.getElementById("event-open-btn").style.visibility = "hidden";
}

function closeNav() {
  document.getElementById("school-events").style.width = "0";
  document.getElementById("school-events").style.visibility = "hidden";
  document.getElementById("event-open-btn").style.visibility = "visible";
  document.getElementById("event-close-btn").style.visibility = "hidden";
}
</script>



<!-- FILE TABLE -->
<div id="tagTableGap"></div>

<div class='itemSelect'>
  <div class="gradeSelect">
  <form action="" method="post">
<label for="grade">Grade:  </label>
                <select name="grade" id="gradeList" >
                <option value="" disabled selected hidden>Select ▼</option>
                    <option value="0" >General</option>
                    <option value="1" >Grade 8</option>
                    <option value="2" >Grade 9</option>
                    <option value="3" >Grade 10</option>
                    <option value="4" >Grade 11</option>
                    <option value="5" >Grade 12</option>
                    <option value="6" >Teachers</option>
                </select>
</div>
<br>
<div class="subjectSelect">
<label for="subject">Subject: </label>
                <select name="subject" id="subjectList" >
                <option value="" disabled selected hidden>Select ▼</option>
                    <option value="0" >General</option>
                    <option value="0" disabled>---------</option>
                    <option value="17" >Afrikaans</option>
                    <option value="1" >Mathematics (general)</option>
                    <option value="2" >Mathematics (literacy)</option>
                    <option value="3" >Mathematics (Pure)</option>
                    <option value="4" >EMS (Economics and Accounting)</option>
                    <option value="5" >Accounting</option>
                    <option value="6" >Economics</option>
                    <option value="7" >Social Science</option>
                    <option value="8" >Geography</option>
                    <option value="9">History</option>
                    <option value="10" >Sciences (All)</option>
                    <option value="11" >Physical Science (Physics)</option>
                    <option value="12" >Life Sciences (Biology)</option>
                    <option value="13" >Marine Biology</option>
                    <option value="14" >Visual Arts</option>
                    <option value="15" >Music</option>
                    <option value="16" >English</option>
                    <option value="17" >Afrikaans</option>
                    <option value="18" >Xhosa</option>
                    <option value="19" >French</option>


                </select>

                <input id="submit" type="submit" value="Go!">
</div> 
<br>
<div class="termSelect">
<label for="term">Term: </label>
                <select name="term" id="termList" >
                <option value="" disabled selected hidden>Select ▼</option>
                    <option value="0" >General</option>
                    <option value="1" >Term 1</option>
                    <option value="2" >Term 2</option>
                    <option value="3" >Term 3</option>
                    <option value="4" >Term 4</option>
                </select>

                <input id="submit" type="submit" value="Go!">
</div> 
 </form>
<?php
$gradeSelected = $_POST['grade'];
$subjectSelected = $_POST['subject'];
$termSelected = $_POST['term'];
?>
</div>


<!-- General -->
<div class="profileFiles">
<table>
  <tr>
    <th class='fileNameCol'></th>
    <th class='fileDownloadCol'></th>
    <th class='fileUploadCol'></th>
  </tr>
  


<?php
$sql = "SELECT * FROM educational_files WHERE school_code = 'SACS' AND moderation_status > '-1' AND subject_code = '$subjectSelected' AND grade = '$gradeSelected' AND term = '$termSelected'"; //CHANGE TO 0

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  ?><h1 id="tableHeading"><?php echo $subjectConverted?></h1><?php  
while($row = $result->fetch_assoc()){
    echo("<tr><td><p class='fileName'>".$row["title"]."</p></td>"."<td><form  method='get' action='".$row["link"]."' target='_blank'><button type='submit' class='downloadBtn'><span>OPEN LINK</span></button></form>"."</a></td>"."<td><p class='fileUploadCol'>Upload date: ".$row["date"]."<br>Publisher: ".$row["publisher"]."<br>Author: ".$row["author"]."</p></td></tr>");
}
} else {
  ?> <div class="noResults"><h1>No Results :/</h1><p>make sure you have entered both fields</p></div> <?php
}

?>

</table></div>







        <script>
          if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
        </script>
    </body>

</html>

