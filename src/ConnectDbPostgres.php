<?php
namespace App;
class ConnectDbPostgres{
    public $servername = "db";
    public $username = "root";
    public $password = "123";

    public  function connectPostgres(){
        $conn = pg_connect("host=$this->servername port=5432  user=$this->username password=$this->password");
        if(!$conn){
            echo  'fail';
        }else{
            return $conn;
        }
    }

}
