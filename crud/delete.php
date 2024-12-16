<?php

include('db.php');
$id = $_GET['id'];

echo $id;
$delete = "DELETE from users where id= $id";
$delete_Run = mysqli_query($con,$delete);
if($delete_Run){
    header("location:read.php");
}
?>