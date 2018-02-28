<?php
  require_once('models/model.php');
  /**
   */
  class Controller
  {
    function __construct()
    {
      $this -> models = new Model();
    }

    public function login_controller($email,$password){
      $this -> $email = $email;
      $this -> $password = $password;
      $result = $this->models->login($email,$password);
      echo $result;
    }

    public function signup_controller($first_name,$last_name,$email,$password,$mobile){
      $this->$first_name = $first_name;
      $this->last_name = $last_name;
      $email->$email = $email;
      $this->$password = $password;
      $this->$mobile = $mobile;
      $result = $this->models->signup($first_name,$last_name,$email,$password,$mobile);
    }
  }

?>
