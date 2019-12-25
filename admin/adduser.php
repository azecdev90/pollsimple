<?php
session_start();

if(!isset($_SESSION['username'])) {
  header('Location: login.html');
}else {

include '../database.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo 'Email in incorrect format';
} else {

if(empty($username) OR empty($password) OR empty($email))
{
  echo 'Please fill all fields in form';
} else {

$hash = password_hash($password, PASSWORD_DEFAULT);

$conn = new mysqli($host, $user, $pass, $db);

$stmt = $conn -> prepare("INSERT INTO users (username,password,email) VALUES (?,?,?)");

$stmt -> bind_param('sss', $username, $hash, $email);
$stmt -> execute();
$stmt -> close();

}
}
}



 ?>
