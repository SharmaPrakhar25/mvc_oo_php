<?php
  require_once('controllers/controller.php');
  $controller = new Controller();
  $email = $_REQUEST['email'];
  if(!empty($email)){
    $controller -> get_diet_controller($email);
  }else{
    $data = array("code"=>"400", "status"=>"Empty field");
    echo json_encode($data);
  }
?>
<!Doctype html>
<html>
<head>
  <title>GET Diet</title>
</head>
<body>
    <!-- input_diet.php?email=&food_item= -->
	<h1>Input Diet</h1>
</body>
</html>
