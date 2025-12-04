<?php 
$serverName="localhost";
$userName="root";
$pass="";
$con=mysqli_connect($serverName,$userName,$pass);
if(!$con){
    die('Connection Error: '.mysqli_connect_error());
}
//create the database
$sqlDB="CREATE DATABASE BITSystem";
if(mysqli_query($con,$sqlDB)){
    echo "Database created successfully";
}
else{
    echo "Error in creating the database: ".mysqli_error($con);
}
?>