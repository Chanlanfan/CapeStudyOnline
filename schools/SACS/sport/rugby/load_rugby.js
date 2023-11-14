function doRefreshRugby(){
    jQuery("#sport-scores-loaded").load("sacshs_rugby_BE.php");

}
jQuery(function refreshTimerRugby() {
    setInterval(doRefreshRugby, 5000);
    // jQuery("#sport-scores-loaded").load("sacshs_rugby_BE.php");
});
