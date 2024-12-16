<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
require('db.php');
$id = $_GET['id'];
echo $id;
$query  = "SELECT * from users where id = $id";
$queryRun = mysqli_query($con,$query);
$fetch = mysqli_fetch_assoc($queryRun);
// echo "<br>";
// echo "Total Rows ".mysqli_num_rows($queryRun);
// echo "<br>";
// echo $fetch['name'];

?>
    <section class="container">
        <div class="row">
            <div class="col-8">
                <form method="post" autocomplete="on">
                    <h2>Edit Your Information</h2>
                    <input type="text" name="id" placeholder="Id" class="form-control" value="<?php echo $fetch['id']; ?>">
                    <input type="text" name="username" class="form-control mb-2" placeholder="Your Name" value="<?php echo $fetch['name']; ?>">
                    <input type="email" name="email" class="form-control mb-2" placeholder="Your Email" value="<?php echo $fetch['email']; ?>">
                    <input type="number" name="phone" class="form-control mb-2" placeholder="Your Phone" value="<?php echo $fetch['phone']; ?>">
                    <input type="text" name="address" class="form-control mb-2" placeholder="Your address" value="<?php echo $fetch['address']; ?>">
                    <button class="btn btn-danger" name="btn_update">Submit your Data</button>
                </form>
            </div>
        </div>
    </section>    
</body>
</html>


<?php

if(isset($_POST['btn_update'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $update_id = $_POST['id'];
    
    $update = "UPDATE users set 
                id = $update_id,
                name =  '$name',
                email = '$email',
                phone = '$phone',
                address = '$address'
                where id = $id"; 
    $updateRun = mysqli_query($con, $update);
    if($updateRun){
        echo "Your record has been updated";
        header('Location:read.php');
    }
}
?>