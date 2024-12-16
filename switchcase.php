<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$firstNumber = 10; 
$secondNumber = 0;

$opt = "*";

switch($opt){
    case "+":
    echo "<p>Addition: ".$firstNumber + $secondNumber."</p>";
    break;
    case "-":
    echo "<p>Subtraction: ".$firstNumber - $secondNumber."</p>"; 
    break;
    case "*":
     echo "<p>Multiplication: ".$firstNumber * $secondNumber."</p>";
     break; 
     case "/":
        if($firstNumber == 0 && $secondNumber == 0 ){
            echo "<p>Result Is undefined</p>";
        }
        else if($secondNumber == 0){
            echo "<p>Cannot Divide by Zero<p>";
        }
        else{
            echo "<p>Divide: ".$firstNumber / $secondNumber."</p>"; 
        }
    break;
    default:
    echo "<p>Invalid Operator</p>";
}
$number = 12.23312;
echo round($number,2);
?>

</body>
</html>