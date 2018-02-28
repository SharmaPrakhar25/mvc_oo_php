<?php
  require_once('models/model.php');
  /**
   */
  class Controller
  {

    function __construct()
    {
      # code...
      $this -> models = new Model();
    }

    public function login_controller($email,$password){
      $this -> $email = $email;
      $this -> $password = $password;
      $result = $this->models->login($email,$password);
      // if($result == 'login successfully'){
      //   //include 'views/afterlogin.php';
      // }
      // else{
      //   //include 'views/login.php';
      // }
      echo $result;
    }
  }

?>
