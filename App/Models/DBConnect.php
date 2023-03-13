<?php
// namespace App\Models;

class DBConnect
{
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "hoanghiep";
    protected $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
    }

    public function conect(){
        if($this->connection->connect_error){
            printf($this->connection->connect_error);
			exit();
        }
        return $this->connection;
     }
}