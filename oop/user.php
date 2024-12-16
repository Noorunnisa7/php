<?php
require "db.php";

class User{

    private $conn;

    public function __construct(){
        $connect = new database();
       $this->conn = $connect->getConnection();
        
    }
    public function create($name , $email){
        $query = "INSERT INTO users (name , email) values ('$name' , '$email')"; 
        $queryRun = $this->conn->query($query);
        if($queryRun){
            echo "DATA inserted successfully";
        }
    }
    public function read(){
        $query = "SELECT * from users";
        $queryRun = $this->conn->query($query);
        return $queryRun;
    }
    public function update(){

    }
    public function delete(){

    }
}


?>