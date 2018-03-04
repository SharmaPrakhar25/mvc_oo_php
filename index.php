<?php
  require_once('controllers/controller.php');
  $controller = new Controller();
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  if(!empty($email) && !empty($password) ){
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
    <!-- index.php?email=&password= -->
	<h1>Index page</h1>
</body>
</html>
