<?php
session_start();

echo $_SESSION['status'];


SELECT * from register where email = '$email'  and pass = '$pass' and verify_status = 1
?>