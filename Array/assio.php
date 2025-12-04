<?php 
//Associative
//create an associative array
$myCars=array("Make"=>"Nissan","Year"=>1999,"Color"=>"Black");
echo $myCars["Make"];
echo "<br>";
$myCars["Model"]="jdhfhf";
var_dump($myCars);
echo "<br>";
//Add multiple element in assiotive array
$myCars+=["age"=>34,"price"=>3455];
var_dump($myCars);
echo "<br>";
//delete an element
unset($myCars["Make"]);
var_dump($myCars);
echo "<br>";
// using array diff
$sheriff=array_diff($myCars,["Black",1999]);
var_dump($sheriff);

echo "<br>";
function myText(){
    echo "I need a simple text";
}
$foda=array("Name"=>"Med","Age"=>13,"Message"=>myText());
echo $foda["Message"];

echo "<br>";
foreach($myCars as $m=>$n){
    echo "Key: ".$m.", Value: ".$n."<br>";
}

//sort an associative array
//sort associative array value in ass order
$arrYou=array("Zai"=>12,"Add"=>23,"Juni"=>54);
asort($arrYou);
foreach($arrYou as $f=>$t){
    echo "$f: $t.<br>";
}
echo "<br>";
//sort associative array key in ass order
ksort($arrYou);
foreach($arrYou as $f=>$t){
    echo "$f: $t.<br>";
}
echo "<br>";
//sort associative array value in des order
$arrYou=array("Zai"=>12,"Add"=>23,"Juni"=>54);
arsort($arrYou);
foreach($arrYou as $f=>$t){
    echo "$f: $t.<br>";
}
echo "<br>";
//sort associative array key in des order
krsort($arrYou);
foreach($arrYou as $f=>$t){
    echo "$f: $t.<br>";
}

echo "<br>";
//multidimenstional array declaration
$cars=array(
    array("BMW",10,5),
    array("Vox",15,3),
    array("Nissan",30,20),
    array("Dodge",5,2)
);
for($row=0;$row<4;$row++){
    echo "<p><b>Row Number: $row</b></p>";
    echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

?>
