<?php 
$serverName="localhost";
$userName="root";
$pass="";
$dbName="BITSystem";
$con=mysqli_connect($serverName,$userName,$pass,$dbName);
if(!$con){
    die('Connection Error: '.mysqli_connect_error());
}

?>