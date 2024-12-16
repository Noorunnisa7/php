<?php
session_start();
include('db.php');
$_SESSION['session'] =  session_id();
 $session_id = $_SESSION['session'];
$product_id = $_POST['product_id'];
$quantity = $_POST['qty'];


$select = "SELECT * from cart where session_id = '$session_id' and product_id = $product_id";
$selectRun = mysqli_query($con , $select);

if(mysqli_num_rows($selectRun)>0){
    $update = "UPDATE cart set qty = qty + $quantity  where session_id = '$session_id' AND product_id = $product_id";
    $updateRun = mysqli_query($con , $update);
}
else{
    $query = "INSERT into cart(session_id,	product_id,	qty	) VALUES ('$session_id',$product_id,$quantity)";
    $queryRun = mysqli_query($con,$query);
}


header('Location:cart.php')

?>