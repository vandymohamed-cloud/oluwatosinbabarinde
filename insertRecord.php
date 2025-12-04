<?php    
include 'dbConnect.php';

// Insert Record
$insertRecord="INSERT INTO student
VALUES(505006789,'Med','Ban','med.van@gmail.com','+23276-158-045');";

$insertRecord.="INSERT INTO student
VALUES(605006789,'Med','Ban','med.van@gmail.com','+23276-158-045');";

$insertRecord.="INSERT INTO student
VALUES(705006789,'Med','Ban','med.van@gmail.com','+23276-158-045');";

$insertRecord.="INSERT INTO student
VALUES(805006789,'Med','Ban','med.van@gmail.com','+23276-158-045')";

if(mysqli_multi_query($con,$insertRecord)){
    echo "Recorded added successfully";
}
else{
    echo "Error in adding record: ".mysqli_error($con);
}
?>