<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wedding_planner";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>