<?php
  require_once('controllers/controller.php');
  $controller = new Controller();
  $user_id = $_REQUEST['user_id'];
  $food_item_id = $_REQUEST['food_item_id'];
  if(!empty($user_id) && !empty($food_item_id)){
    $controller -> delete_diet_controller($user_id,$food_item_id);
  }else{
    $data = array("code"=>"400", "status"=>"Empty field");
    echo json_encode($data);
  }
?>
<!Doctype html>
<html>
<head>
  <title>DELETE Diet</title>
</head>
<body>
    <!-- input_diet.php?email=&food_item= -->
	<h1>Input Diet</h1>
</body>
</html>
