<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
include('session.php');

?>
</head>
<body>
    
<section class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>Fill this form</h2>
            <form action="welcome.php" method="get">
                <input type="text" name="username" class="form-control mb-2" placeholder="Enter your Name">
                <input type="text" name="email" class="form-control mb-2" placeholder="Enter your Email">
                <input type="text" name="phone" class="form-control mb-2" placeholder="Enter your Number">
                <textarea name="message" class="form-control mb-2" placeholder="Enter your Message"></textarea>
                <button name="btn_submit" class="btn btn-info w-100">Submit</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>

<?php

if(isset($_GET['btn_submit'])){
    $name =  $_GET["username"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $message = $_GET["message"];
    echo $name."<br>".$email."<br>".$phone."<br>".$message;
}



?>