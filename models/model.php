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

  public function food_item(){
    $query = $this->con->query("SELECT * from food_item");
    if($query->num_rows){
      while($query_r = mysqli_fetch_assoc($query)){
        $food_item = $query_r['food_item'];
        $out[$i++] = array("Food_item"=>$food_item);
        $data = array("code"=>"200","staus"=>$out);
      }
    echo json_encode($data);
    }
  }

  public function get_diet($email){
    if($_SESSION["email"] == $email){
      $query = $this->con->query("SELECT food_item,quantity FROM users_diet
        INNER JOIN users ON users_diet.user_id = users.id where email='$email'");
      if($query->num_rows){
        while($query_r = mysqli_fetch_assoc($query)){
          $quantity = $query_r['quantity'];
          $food_item = $query_r['food_item'];
          $out[$i++] = array("food item"=>$food_item,"quantity"=>$quantity);
          $data = array("code"=>"200", "status"=>array($out));
        }
        echo json_encode($data);
      }else{
        $data = array("code"=>"400" , "status"=>"No diet saved");
        echo json_encode($data);
      }
    }else{
      $data = array("code"=>"400" , "status"=>"Please Login first");
      echo json_encode($data);
    }
  }

  public function delete_diet($user_id,$food_item_id){
    if($_SESSION["id"] == $user_id){
      $query = $this->con->query("SELECT food_item.food_item from food_item where food_item.id='$food_item_id'");
      if($query->num_rows){
        $query_r = mysqli_fetch_assoc($query);
        $food = $query_r['food_item'];
        $que = $this->con->query("SELECT food_item from users_diet where user_id='$user_id' AND food_item='$food'");
        if($que->num_rows){
          $query1 = $this->con->query("DELETE from users_diet where user_id='$user_id' AND food_item='$food'");
          if($query1){
            $data = array("code"=>"200", status=>"$food deleted successfully");
            return json_encode($data);
          }else{
            $data = array("code"=>"400", status=>"Something went wrong");
            return json_encode($data);
          }
        }else{
          $data = array("code"=>"400", status=>"Food item is not in diet");
          return json_encode($data);
        }
      }
    }else{
      $data = array("code"=>"400", status=>"Please Login first");
      return json_encode($data);
    }
  }


    public function input_diet($email,$food_item,$quantity){
      if($_SESSION["email"] == $email){
        $query = $this->con->query("SELECT * from users where email='$email'");
        if($query->num_rows){
          $query_r = mysqli_fetch_assoc($query);
          $id = $query_r['id'];
          $query1 = $this->con->query("INSERT into users_diet set user_id='$id', quantity='$quantity', food_item='$food_item'");
          if($query1){
            $data = array("code"=>"200", status=>"Item added successfully");
            return json_encode($data);
          }else{
            $data = array("code"=>"400", status=>"Something went wrong");
            return json_encode($data);
          }
        }else{
          $data = array("code"=>"400", status=>"Email don't match in database");
          return json_encode($data);
        }
      }else{
        $data = array("code"=>"400", status=>"Please Login first");
        return json_encode($data);
      }
    }

    public function login($email,$password){
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $data = array("code"=>"400","status"=>"Invalid email format");
        echo json_encode($data);
      }else{
        $query = ($this->con->query("SELECT * from users where email='$email'"));
        if($query->num_rows){
          $this->$password = $password; // passsword from user while login
          $query_r = mysqli_fetch_assoc($query);
          $id = $query_r['id'];
          $FromDb = $query_r['password']; // password from database
          $isPasswordCorrect = password_verify($password, $FromDb);
          if($isPasswordCorrect){
            $_SESSION["email"] = $email;
            $_SESSION["id"] = $id;
            $data = array("code"=>"200","status"=>"login successfully");
            return json_encode($data);
          }else{
            $data = array("code"=>"400", "status"=>"Incorrect password");
            return json_encode($data);
          }
        }else{
          $data = array("code"=>"400","status"=>"Incorrect Email");
          return json_encode($data);
        }
      }
    }

    public function signup($first_name,$last_name,$email,$password,$mobile){
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $data = array("code"=>"400","status"=>"Invalid email format");
        return json_encode($data);
      }else{
        $query1 = ($this->con->query("SELECT * from users where email='$email'"));
        $query1_r = mysqli_fetch_assoc($query1);
        if($query1_r['email']==$email){
          $data = array("code"=>"400","status"=>"Email already exists");
          return json_encode($data);
        }else{
          $query2 = $this->con->query("INSERT into users set first_name='$first_name',last_name='$last_name',email='$email',password='$password',mobile='$mobile'");
          if($query2){
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
