<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
session_start();
include('db.php');
// echo session_id();
?>
<section class="container">
    <div class="row">
    <?php
    $query = "SELECT * from products";
    $queryRun = mysqli_query($con,$query);

    while($fetch = mysqli_fetch_assoc($queryRun)){
        if($fetch['stock']>0){
            $addCart = "<label>QTY :</label><input type='number' name='qty' value='1' min='1' max='".$fetch['stock']."' style='width:50px;'>
            <button class='btn btn-dark'>Add to cart</button>";
        }
        else{
            $addCart = "<p>Out of stock</p>";
        }
        echo "<div class='col-4'><img src='img/".$fetch['image']."'>";
        echo "<h2>".$fetch['name']."</h2>";
        echo "<p>".$fetch['price']."</p>";
        echo "<form method='POST' action='add_to_cart.php'>
        <input name='product_id' type='hidden' value='".$fetch['id']."'>
            ".$addCart."
            </form>";
        echo "</div>";
    }
    ?>    
    </div>
</section>


