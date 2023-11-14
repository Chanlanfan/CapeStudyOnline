function doRefreshWpolo(setInterval){
    jQuery("#sport-scores-loaded").load("sacshs_wpolo_BE.php");

}
jQuery(function refreshTimerWpolo() {
   setInterval(doRefreshWpolo, 5000);
// jQuery("#sport-scores-loaded").load("sacshs_wpolo_BE.php");
});