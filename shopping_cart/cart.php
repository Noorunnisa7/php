<?php
session_start();
include('db.php');

$session_id=  $_SESSION['session'];
?>

<h2>Your Cart</h2>
<?php
$query = "SELECT c.id cid, p.id pid, c.qty , p.price , p.name  from cart c 
        inner join products p ON p.id = c.product_id 
        where c.session_id = '$session_id'";
$queryRun = mysqli_query($con , $query);
$grandTotal = 0;
while($row = mysqli_fetch_assoc($queryRun)){
    $total = $row['price'] * $row['qty'];
    $grandTotal += $total;
    echo '<br>';
    echo '<br>';
    echo "Product Name : ".$row['name'];
    echo '<br>';
    echo  "Price : ".$row['price'] ." Quantity :". $row['qty'];
    echo '<br>';
    echo "Poduct Total :". $row['price']*$row['qty'];

    echo "<form method='post' action='remove_cart.php'>
      <input type='hidden' value='".$row['cid']."' name='cart_id'>
      <button>Remove</button>
    </form>";
}
echo "<br>";
echo "<br>";
echo "Total amount :".$grandTotal;

?>