<?php 
// Database configuration 

$dbHost = "92.205.12.118";
$dbUsername = "chanlanfan";
$dbPassword = "Minecraft1234";
$dbName = "CapeStudyOnline";
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}