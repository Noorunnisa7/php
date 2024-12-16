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
            <h1>Upload image</h1>
            <form method="post" enctype="multipart/form-data">
                <label for="">Select an image</label>
                <input type="file" name="file">
                <br>
                <br>
                <button class="btn btn-warning" name="btn_upload">Upload Image</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>
<?php
if(isset($_POST['btn_upload'])){
    $image = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $image_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];

    echo $file_type."<br>";
    $allow_types = ['image/png', 'image/jfif', 'image/jpg' , 'image/jpeg']; 

    $maxSize = 100000;
    echo "Image Size : ". $image_size;
    echo "<br>";
    $location = "images/";
    if($image_size < $maxSize && in_array($file_type, $allow_types)){
        if( move_uploaded_file($tmp_name , $location.$image)){
            echo "image Upload successfully";
        }
        else{
            echo "upload failed";
        }
    }
    else{
        echo "File Size limit 100 KB and only select image type (jfif,png, jpg ,jpeg)";
    }

    if($image_size < $maxSize){
        echo"<section><img src='images/".$image."'></section>";
    }

}
?>