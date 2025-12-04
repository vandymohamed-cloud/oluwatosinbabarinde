<?php 
//Create an index array
$Cars=array("BMW","Nissan","Toyota","Opel");
var_dump($Cars);
echo "<br>";
echo $Cars[2];
echo "<br>";
$Cars[2]="Dodge";
var_dump($Cars);
echo "<br>";
$Cars[]="Bentz";
var_dump($Cars);
echo "<br>";
array_push($Cars,"Bent","Honda","Audi");
var_dump($Cars);
echo "<br>";
array_splice($Cars,1,1);
var_dump($Cars);
echo "<br>";
unset($Cars[1]);
var_dump($Cars);
echo "<br>";
array_pop($Cars);
var_dump($Cars);
echo "<br>";
array_shift($Cars);
var_dump($Cars);
echo "<br>";
//array function
function myMessage(){
    echo "This is my message";
}
$myArr=array("Med",24,myMessage());
$myArr[2];
echo "<br>";
//loop through an index array element
foreach($Cars as $x){
    echo "$x <br>";
}
echo "<br>";
//sort an index array
//sort in assending order
sort($Cars);
$van=count($Cars);
for($x=0;$x<$van;$x++){
    echo "$Cars[$x].<br>";
}
echo "<br>";
//sort in dessending order
rsort($Cars);
$van=count($Cars);
for($x=0;$x<$van;$x++){
    echo "$Cars[$x].<br>";
}
?>