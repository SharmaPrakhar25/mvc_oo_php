<?php
  /**
   *
   */
   require_once('config.php');
  class db_connect
  {
    public $connection;
    public function __construct()
    {
      $this->connection = new mysqli(db_host,db_user,db_password,db_database);
      if(!$this->connection){
        die("Can not connect to database");
      }else{
        echo "connected successfully";
      }
    }

    public function query($sql){
      $que = mysqli_query($this->connection, $sql);
      return $que;
    }
  }

?>
