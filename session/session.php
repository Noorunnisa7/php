<?php
session_start();
if(!isset($_SESSION['user']) || !isset($_COOKIE['user'])){
    header('Location:login.php');
}

if(time() > $_COOKIE['user']){
    session_destroy();
    header('Location:login.php');
}

echo $_COOKIE['user'];
?>