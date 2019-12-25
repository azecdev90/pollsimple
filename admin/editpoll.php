<?php
session_start();
if(!isset($_SESSION['username']))
{
header('Location: index.php');
} else {

include '../database.php';


$conn = new mysqli($host, $user, $pass, $db);


$values = $_POST['id'];
if(empty($values))
{
  echo 'Incorrect params';
} else {
foreach($values as $key => $value){
if ($stmt = $conn -> prepare("UPDATE poll_options SET name = ? WHERE id= ?")) {

   $stmt -> bind_param('si', $value, $key);
   $stmt -> execute();
   $stmt -> close();

}
}
}
}


 ?>
