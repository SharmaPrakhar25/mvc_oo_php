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
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $data = array("code"=>"400","status"=>"Invalid email format");
        echo "<script>alert('Enter valid email address');</script>";
      }else{
        $query = ($this->con->query("SELECT * from users where email='$email' AND password='$password'"));
        if($query->num_rows){
          $data = array("code"=>"200","status"=>"login successfully");
          $_SESSION["email"] = $email;
          return json_encode($data);
        }else{
          $data = array("code"=>"400","status"=>"Email and password doesn't match");
          return json_encode($data);
        }
      }
    }

    public function signup($first_name,$last_name,$email,$password,$mobile){
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $data = array("code"=>"400","status"=>"Invalid email format");
        return json_encode($data);
        //echo "<script>alert('Enter valid email address');</script>";
      }else{
        $query1 = ($this->con->query("SELECT * from users where email='$email'"));
        if($query1->num_rows){
          $data = array("code"=>"400","status"=>"Email already exists");
          return json_encode($data);
        }else{
          $query2 = ($this->con->query("INSERT into users set first_name='$first_name',last_name='$last_name',email='$email',password='$password',mobile='$mobile'"));
          if($query2->num_rows){
            $data = array("code"=>"200","status"=>"User registered successfully");
            return json_encode($data);
          }else{
            $data = array("code"=>"400","status"=>"Something went wrong");
            return json_encode($data);
          }
        }
      }
    }

  }

?>
