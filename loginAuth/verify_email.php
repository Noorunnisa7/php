<?php

session_start();
$con = mysqli_connect('localhost','root','','login_auth');

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $query = "SELECT * from register where verify_token = '$token' limit 1";
    $queryRun = mysqli_query($con , $query);

    $fetch = mysqli_fetch_assoc($queryRun);

    if(mysqli_num_rows($queryRun)>0){
        $check_Status =  $fetch['verify_status'];
        if($check_Status == 0){
            $update = "UPDATE  register set verify_status = 1 where verify_token = '$token'";
            $updateRun = mysqli_query($con , $update);
            $_SESSION['status'] = 'Your Email Address has been verified now login';
            header('Location:login.php');
        }
        else{
            $_SESSION['status'] = 'Your Email Address already verified';
            header('Location:login.php');
        }
    }
    else{
        $_SESSION['status'] = 'Your Token does not exist';
        header('Location:login.php');
    }
}
else{
    $_SESSION['status'] = "Unauthorized";
    header('Location:login.php');

}



?>