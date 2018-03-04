<?php
  require_once('controllers/controller.php');
  $controller = new Controller();
  $email = $_REQUEST['email'];
  $food_item = $_REQUEST['food_item'];
  $quantity  = $_REQUEST['quantity'];

  if(!empty($email) && !empty($food_item) && !empty($quantity)){
    $controller -> input_diet_controller($email,$food_item,$quantity);
  }else{
    $data = array("code"=>"400", "status"=>"Empty field");
    echo json_encode($data);
  }
?>
<!Doctype html>
<html>
<head>
  <title>Input Diet</title>
</head>
<body>
    <!-- input_diet.php?email=&food_item= -->
	<h1>Input Diet</h1>
</body>
</html>
