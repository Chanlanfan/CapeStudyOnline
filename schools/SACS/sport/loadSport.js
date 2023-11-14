var sport = '';
function makeRugby(){
    let sport = 'rugby'
    doRefresh();
}
function makeWpolo(){
    let sport = 'wpolo'
    doRefresh();
}
function doRefresh(){
    if(sport == 'rugby'){
    jQuery("#sport-scores-loaded").load("sacshs_rugby_BE.php");
    }else if(sport == 'wpolo'){
        jQuery("#sport-scores-loaded").load("sacshs_wpolo_BE.php");
      
    }

}    
jQuery(function() {
    setInterval(doRefresh, 5000);
    // jQuery("#sport-scores-loaded").load("sacshs_rugby_BE.php");
});


