<?php
  require_once('controllers/controller.php');
  $controller = new Controller();
  $first_name = $_REQUEST['first_name'];
  $last_name = $_REQUEST['last_name'];
  $email = $_REQUEST['email'];
  $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
  $mobile = $_REQUEST['mobile'];
  if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($mobile)){
    $controller -> signup_controller($first_name,$last_name,$email,$password,$mobile);
  }else{
    $data = array("code"=>"400", "status"=>"Empty Field");
    echo json_encode($data);
  }
?>
<!Doctype html>
<html>
<head>
  <title>SIGNUP</title>
</head>
<body>
    <!-- signup.php?first_name=&last_name=&email=&password=&mobile=  -->
</body>
</html>
