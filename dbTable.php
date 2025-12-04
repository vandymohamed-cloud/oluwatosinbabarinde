<?php 
$serverName="localhost";
$userName="root";
$pass="";
$dbName="BITSystem";
$con=mysqli_connect($serverName,$userName,$pass,$dbName);
if(!$con){
    die('Connection Error: '.mysqli_connect_error());
}
//create table department
$sqlDB="CREATE TABLE department
(
deptID INT(3) NOT NULL,
PRIMARY KEY(deptID),
deptName VARCHAR(35) NOT NULL,
deptHead VARCHAR(35) NOT NULL,
deptLocation VARCHAR(35) NOT NULL
)";
if(mysqli_query($con,$sqlDB)){
    echo "department table created successfully"; 
}
else{
    echo "Error in creating the department table : ".mysqli_error($con);
}

echo "<br>";

//create table lecturer
$sqlDB="CREATE TABLE lecturer
(
lecID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(lecID),
lecFName VARCHAR(35) NOT NULL,
lecLName VARCHAR(35) NOT NULL,
lecMAIL VARCHAR(35) NOT NULL,
lecTel VARCHAR(35) NOT NULL,
lecDept VARCHAR(35) NOT NULL
)";
if(mysqli_query($con,$sqlDB)){
    echo "lecturer table created successfully"; 
}
else{
    echo "Error in creating the lecturer table : ".mysqli_error($con);
}
?>