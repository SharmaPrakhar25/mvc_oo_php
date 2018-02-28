<?php
  require_once('controllers/controller.php');
  $controller = new Controller();
  if(empty($email) == 'false' && empty($password) == 'false'){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $controller -> login_controller($email,$password);
  }else{
    $data = array("code"=>"400", "status"=>"Empty email and password");
    echo json_encode($data);
  }
?>
<!Doctype html>
<html>
<head>
  <title>login</title>
</head>
<body>

</body>
</html>
