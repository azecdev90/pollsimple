<?php
session_start();

include '../database.php';

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username) OR empty($password)){
    echo 'Please fill the form correctly';
} else {



$conn = new mysqli($host, $user, $pass, $db);

if ($stmt = $conn->prepare("SELECT password FROM users WHERE username = ?")) {

    $stmt -> bind_param("s", $username);
    $stmt -> execute();
    $stmt -> bind_result($passworddb);
    $stmt -> fetch();
    $stmt -> close();
}


if(password_verify($password, $passworddb)){
        $_SESSION['username'] = $username;
          header('Location: index.php');
} else {
  echo 'Please use correct username/password combination';
}
}
 ?>
