<?php
  /**
   *
   */
  class db_connect
  {

    function __construct()
    {
      require_once('config.php');
      $con = new mysqli(db_host,db_user,db_password,db_database);
      if(!$con){
        die("Can not connect to database");
      }else{
        echo "connected successfully";
        return $con;
      }
    }

    function query($sql){
      $que = $this->mysqli->query($sql);
    }
  }

?>
