<?php
include('session.php');

?>

<h1>Welcome <?php echo  $_SESSION['user']; ?></h1>

<a class="btn btn-dark" href="logout.php">Logout</a>