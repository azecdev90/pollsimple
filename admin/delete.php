<?php
session_start();

if(!isset($_SESSION['username']))
{
header('Location: index.php');
} else {

include '../database.php';


$conn = new mysqli($host, $user, $pass, $db);

$ids = $_POST['id'];
if(empty($ids))
{
  echo 'Incorrect params';
}
else {

foreach($ids as $value){

if ($stmt = $conn -> prepare("DELETE FROM poll WHERE id = ?")) {

  $stmt -> bind_param('i', $value);
  $stmt -> execute();
  $stmt -> close();
}
}
}
}
 ?>
