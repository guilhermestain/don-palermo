<?php 

class ConfigDb {

  private $host   = '127.0.0.1';
  private $user   = 'root';
  private $pass   = '43690_Alexandre';
  private $dbName = 'db_pizza';

  public function connectDb() {

    $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);
    mysqli_set_charset($conn, 'utf8');

    if(mysqli_connect_errno($conn)) {
      echo('error connnection'.mysqli_connect_error());
    };
    
    return $conn;
  }

}

?>