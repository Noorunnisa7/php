<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
 $name = ["Zahak","Awais","Moiz"];

 $num  = array("Zahak","Awais","Moiz");

var_dump($name);

 echo $name[0];
 echo $name[1];
 echo $name[2];
 
 echo $num[0].$num[1];

foreach($name as $x){
    echo $x;
    echo "<br>";
}


//  associative array 
echo "<h3>Associative Array</h3>";

$array  = array("student1"=>"Ali", "Student2" => "Sara","Student3" => "Hyder","Student4" => "Zainab");

echo $array["Student3"].$array["student1"].$array["student1"];

foreach($array as $i => $j){
    echo $j;
    echo "<br>";
}



$cars = [];
$cars[0] = "Ferrari";
$cars[1]  = "BMW";
$cars[2] = "Mehran";
 var_dump($cars);

echo "<br>";

    $fruits = [];
    $fruits["f1"] = "Apple";
    $fruits["f2"] = "Orange";

  var_dump($fruits);
  echo "<br>";

  $array_update = ["ali","Hyder","Sara"];
  $array_update[2] = "Sara khan";
  $array_update[1] = "Hyder khan";
  echo "<br>";
  //push items
  $array_update[] = "Zara";
  $array_update[] = "Hassan";
  $array_update[] = "hussain";
// remove an item
  array_splice($array_update , 1, 3);
  var_dump($array_update)  ; 


  
?>
</body>
</html>