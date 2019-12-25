<?php

include 'database.php';


$conn = new mysqli($host, $user, $pass, $db);

$id = $_POST['id'];
$poll_id = $_POST['options'];

if(isset($id)){
    if($id>=1 && $id<=4) {
      if($stmt = $conn->prepare("UPDATE votes SET votes = votes+1 WHERE poll_id = ? AND poll_option_id = ?")) {
        $stmt -> bind_param("ii", $id, $poll_id);
        $stmt -> execute();
      }

    }else {
      echo 'Please type correct format for vote';
    }

}




 ?>
