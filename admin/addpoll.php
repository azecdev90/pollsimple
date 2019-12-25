<?php
session_start();

if(!isset($_SESSION['username'])) {
  header('Location: login.html');
}else {

include_once '../database.php';

$title = $_POST['title'];

$options = $_POST['options'];

if(empty($title) OR empty($options))
{

} else {

$conn = new mysqli($host, $user, $pass, $db);


if($stmt = $conn -> prepare("INSERT INTO poll (poll_title) VALUES (?)")) {

$stmt -> bind_param('s', $title);
$stmt -> execute();
$id = $conn->insert_id;
$stmt -> close();
}

$i = 1;
foreach($options as $option){

if($stmt = $conn -> prepare("INSERT INTO poll_options (poll_id, name, pol) VALUES (?,?,?)")) {

$stmt -> bind_param('isi',$id, $option, $i);
$stmt -> execute();
$stmt -> close();
$i++;

}
}

$start = 0;
for ($x = 1; $x <= 4; $x++) {
if($stmt = $conn -> prepare("INSERT INTO votes (poll_id, poll_option_id, votes) VALUES (?,?,?)")) {

$stmt -> bind_param('iii',$id,$x,$start);
$stmt -> execute();
$stmt -> close();
}
}

}
}
 ?>
