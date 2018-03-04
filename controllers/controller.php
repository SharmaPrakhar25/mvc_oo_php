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

    public function get_diet_controller($email){
      $this->$email = $email;
      $result = $this->models->get_diet($email);
      echo $result;
    }

    public function food_item_controller(){
      $result = $this->models->food_item();
      echo $result;
    }


    public function input_diet_controller($email,$food_item,$quantity){
      $this -> $email = $email;
      $this -> $food_item = $food_item;
      $this -> $quantity = $quantity;
      $result = $this->models->input_diet($email,$food_item);
      echo $result;
    }

    public function delete_diet_controller($user_id,$food_item_id){
      $this -> $user_id = $user_id;
      $this -> $food_item_id = $food_item_id;
      $result = $this->models->delete_diet($user_id,$food_item_id);
      echo $result;
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
      $this->$email = $email;
      $this->$password = $password;
      $this->$mobile = $mobile;
      $result = $this->models->signup($first_name,$last_name,$email,$password,$mobile);
      echo $result;
    }
  }

?>
