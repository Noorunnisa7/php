<?php

$array = ["Ali","Hyder","Sara", "Zahak","ifrah"];

rsort($array);
for($i = 0 ; $i <= 4 ; $i++){
    echo $array[$i];
}

echo "<br>";
$array_assoc = ["nameone"=> "Ali","nametwo"=> "Sara","namethree"=> "Zara","namefour"=> "Zain"];

arsort($array_assoc);

foreach($array_assoc as $key => $value){
    echo $value;
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$multi_array = [
                ["Ali",20 ,"0987654","Karachi"],
                ["Sara",20 ,"097654","Karachi"],
                ["Zara",20 ,"098754","Karachi"],
                ["hyder",20 ,"0984","Karachi"],
            ];

    echo $multi_array[2][3];
    echo $multi_array[3][1];

    foreach($multi_array as $value){
        foreach($value as $child_value){
            echo $child_value;
            echo "<br>";
        }
    }

$assoc_array = array(
                "student1"=> array("Name"=> "Zainab" , "Phone"=> "03214566","City"=>"Karachi"),
                "student2"=> array("Name"=> "hassan" , "Phone"=> "03214566","City"=>"Karachi"),
                "student3"=> array("Name"=> "Noor" , "Phone"=> "03214566","City"=>"Karachi"),
            );
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// echo $assoc_array["student1"]["Name"];
// echo $assoc_array["student3"]["Phone"];
foreach($assoc_array as $key){
    foreach($key as $key_child => $value){
        echo $key_child .": ". $value;
        echo "<br>";
    }
    echo "<br>";
}
 
?>