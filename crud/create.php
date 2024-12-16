<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-8">
                <form method="post" autocomplete="on">
                    <h2>Add Your Information</h2>
                    <input type="text" name="username" class="form-control mb-2" placeholder="Your Name">
                    <input type="email" name="email" class="form-control mb-2" placeholder="Your Email">
                    <input type="number" name="phone" class="form-control mb-2" placeholder="Your Phone">
                    <input type="text" name="address" class="form-control mb-2" placeholder="Your address">
                    <button class="btn btn-danger" name="btn_submit">Submit your Data</button>
                </form>
            </div>
        </div>
    </section>    
</body>
</html>

<?php
include('db.php');

if(isset($_POST['btn_submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    
    // echo $name,$email,$phone,$address;

    $query = "INSERT into users (name, email , phone,address) VALUE ('$name','$email','$phone','$address')";

    $queryRun = mysqli_query($con ,$query);

    if($queryRun){
        echo "<script>alert('Data Inserted Successfully')</script>";
    }
}

?>