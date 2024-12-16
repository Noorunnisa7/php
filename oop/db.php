<?php
class database{
    private $host = "Localhost"; 
    private $user = "root";
    private $pass = ""; 
    private $db = "crud";

    public $con; 
    public  function __construct(){
        $this->con = new mysqli($this->host , $this->user , $this->pass , $this->db);
    }
    public function getConnection(){
       return $this->con;
    }

}


?>