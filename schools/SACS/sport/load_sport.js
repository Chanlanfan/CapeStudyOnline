$(document).ready(function(){
    var interval; // Common interval variable

    // Function to refresh content for Wpolo
    function refreshWpolo() {
        $("#sport-scores-loaded").load("wpolo/sacshs_wpolo_BE.php");
    }

    // Function to refresh content for Rugby
    function refreshRugby() {
        $("#sport-scores-loaded").load("rugby/sacshs_rugby_BE.php");
    }

    // Button 1 click handler
    $("#refreshWpolo").click(function(){
        clearInterval(interval); // Clear any previous interval
        refreshWpolo(); // Refresh content for Wpolo

        // Periodically refresh content for Wpolo every 5 seconds after the button click
        interval = setInterval(refreshWpolo, 5000);
    });

    // Button 2 click handler
    $("#refreshRugby").click(function(){
        clearInterval(interval); // Clear any previous interval
        refreshRugby(); // Refresh content for Rugby

        // Periodically refresh content for Rugby every 5 seconds after the button click
        interval = setInterval(refreshRugby, 5000);
    });
});