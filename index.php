<?php
echo '<h1>Hello World</h1>';
echo 'Welcome to my website';

?>


<h1><?php echo 'PHP codes';?></h1>
<?php

$std1 = 'Ahmed';
$std2 = 'Ali';

echo $std1,$std2;
print $std1;
echo "<br>";
echo "$std1";
?>

<?php
$a1 = "Hello";
$a1 .= "World";
echo "<br>";
echo $a1;

$num1 = 100; 
$num1 *= 200;
echo "<br>";
echo $num1;




?>

<h1>Conditions</h1>
<?php
$n1 = 49; 
$n2 = 50; 
if($n1 <= $n2){
?>
<h1>Condition is True....</h1>
<?php    
}


$name = 10;

if($name == "10"){
    echo $name;
}

// $username = "Admin";
// $password = 1234;

// if($username == "Admin" && $password == 12345){
//     echo "<script>alert('Login Successfully')</script>";
// }
// else{
//     echo "<script>alert('Invalid Username and password')</script>";
// }



$x = 7 ;
$y = 2 ;
 
$result =  $x > $y ? "Condition is true":"Condition is false";

echo $result;

$user = "Noor Un Nisa";

if($user != "Noor"){
    echo "<p>User Name ".$user."</p>";
}


?> 

