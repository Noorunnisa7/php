<?php

// server name  localhost    
// username     root    
// password     ''
// database name 'crud'

$serverName = "Localhost";
$username   = "root";
$password   = "";
$database   = "crud";

$con = mysqli_connect($serverName, $username , $password , $database);

// if($con){
//     echo "<h4>Database Connected</h4>";
// }
// else{
//     echo "<h4>Error</h4>";
// }

?>