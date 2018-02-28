<?php
  /**
   *
   */
  require_once('db_connect.php');
  session_start();
  class Model
  {
    function __construct()
    {
      $db = new db_connect();
    }

    public function login($email,$password){
      $query = $db->query("SELECT * from users where email='$email' AND password='$password'");
      if($query){
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
