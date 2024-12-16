<h1>Register User</h1>
<form method="post">
    <label >Enter your Name</label>
    <input type="text" name="user" >
    <br>
    <label >Enter your Email</label>
    <input type="text" name="email" >
    <br>
    <label >Enter your Password</label>
    <input type="text" name="pass" >
    <br>
    <br>
    <button name="btn_register">Register</button>
</form>


<?php

$con = mysqli_connect('localhost', 'root','','login_auth');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

 function verifyEmail($user,$email, $verify_token){

    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noorunnisa560@gmail.com';                     //SMTP username
    $mail->Password   = 'izuuztvooalindxy';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port `
    
    
    $mail->setFrom('noorunnisa560@gmail.com', $user ); 
    $mail->addAddress($email, $user); 
    
    
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Connect Nisa : Verify Your Email address';
     $mail->Body    = '<h1>Email Verification</h1> Click Your for verify <a href="http://localhost:8080/phpcodes/loginAuth/verify_email.php?token='.$verify_token.'">Verify Your Account</a>';
    
     if($mail->send()){
        echo "<script>alert('Verification code has been sent on email address')</script>";
     }
     else{
        echo "<script>alert('Mail Not send')</script>";
    
     }


 }

if(isset($_POST['btn_register'])){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $verify_token = md5(rand());

    $CheckEmail = "SELECT * from register where email = '$email' limit 1";
    $CheckEmailRun = mysqli_query($con , $CheckEmail);
    $Row =  mysqli_num_rows(result: $CheckEmailRun);
    if($Row > 0){
        echo "This Email id already exists";
    }
    else{
        $query = "INSERT into register(name,email,password,verify_token) values ('$user','$email','$pass','$verify_token')";

        $queryRun = mysqli_query($con, $query);
        verifyEmail($user,$email,$verify_token);
        if($queryRun){
            echo "User has been registered!";
        }
    }
}

// $random = rand();
// echo $random;
// echo "<br>";
// echo md5('Nisa1223@12345');


?>