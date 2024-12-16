<?php
session_start();
include('db.php');

$cart_id = $_POST['cart_id'];
echo $cart_id;
$delete = "DELETE from cart where id = $cart_id";
$deleteRun = mysqli_query($con , $delete);
 header('Location:cart.php');

?>