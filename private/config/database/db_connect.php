<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpsd = "";
$dbname = "uppionlineacademy";

$conn = mysqli_connect($dbhost , $dbuser , $dbpsd , $dbname);

if(mysqli_connect_errno()){
        die("connection failed ". mysqli_connect_error() . ":". mysqli_connect_errno());

}
?>