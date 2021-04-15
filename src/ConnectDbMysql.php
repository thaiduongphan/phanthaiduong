<?php
namespace App;

class ConnectDbMysql {

  public $servername = "mariadb";
  public $username = "root";
  public $password = "123";
 
  public function connectMysql(){
    
    $conn = mysqli_connect($this->servername, $this->username, $this->password);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
      return $conn;
    }
  }
}

  
