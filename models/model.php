<?php
  require_once("db_connect.php");
  session_start();
  class Model
  {
    public $con;
    public function __construct()
    {
      $this->con = new db_connect();
    }

    public function login($email,$password){
      $query = ($this->con->query("SELECT * from users where email='$email' AND password='$password'"));
      if($query->num_rows){
        $data = array("status"=>"login successfully");
        return json_encode($data);
      }else{
        $data = array("status" => "Invalid email and password");
        return json_encode($data);
      }
    }

    public function signup(){

    }

  }

?>
