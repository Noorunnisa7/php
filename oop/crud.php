<?php
require "user.php";
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<div class="container">
    <form method="post">
        <label>Enter your name</label>
        <input type="text" placeholder="Enter your name" name="name">
        <label>Enter your Email</label>
        <input type="text" placeholder="Enter your email" name="email">
        <button name="create">Create User</button>
    </form>
</div>

<?php
$users = new User();

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $users->create($name, $email);
}
// $users->read();
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
           <?php 
        //    echo mysqli_num_rows($users->read());
          // while($row = mysqli_fetch_assoc($users->read())){

          if(mysqli_num_rows($users->read())> 0){

        //   $date = date_format('DD/MM/YYYY', )
          foreach($users->read() as $user){
            // echo $user['name'];
            // echo $user['email'];
        
           ?>
           <tr>
                <td><?php echo $user['name'];?></td>
                <td><?php echo $user['email'];?></td>
            </tr>
           <?php
          }
        }
        else{
            echo "no user found";
        }
           ?>
        </tbody>

    </table>
</div>