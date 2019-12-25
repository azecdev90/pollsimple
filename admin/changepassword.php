<?php
session_start();

if(!isset($_SESSION['username'])) {
  header('Location: login.html');
}else {

include '../database.php';

$username = $_SESSION['username'];
$password = $_POST['password'];

if(empty($password)){
    echo 'Please correct all values';
} else {
$hash = password_hash($password, PASSWORD_DEFAULT);

$conn = new mysqli($host, $user, $pass, $db);

if ($stmt = $conn -> prepare("UPDATE users SET password = ? WHERE username= ?")) {

   $stmt -> bind_param('ss', $hash, $username);
   $stmt -> execute();
   $stmt -> close();

}
}
}




 ?>
