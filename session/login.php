    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<section class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h1 class="text-center">
                Login Form
            </h1>
            <form method="post">
            <input type="text" placeholder="Enter Your UserName" class="form-control mb-2" name="username">
            <input name="pass" type="password" placeholder="Enter Your Password" class="form-control mb-2">
            <button name="btn_login" class="btn btn-danger w-100">Login</button>
            </form>
        </div>
    </div>
</section>
<?php
session_start();
if(isset($_SESSION['user'])){
    header(header: 'Location:welcome.php');
}
else{
    if(isset($_POST['btn_login'])){
        $user = $_POST['username'];
        $pass = $_POST['pass'];
    
        if($user == "Ali" && $pass == "1234" || $user == "admin" && $pass == 'abc' || $user == 'admin12' && $pass == 'abc123'){
            $_SESSION['user'] = $user;
            setcookie('user',$user,time()+60*60);
            header('Location:welcome.php');
        }
        else{
            echo "<script>alert('Invalid credentials')</script>";
    
        }
        
    }
}




?>