<?php
session_start();

if(!isset($_SESSION['username']))
{
header('Location: index.php');
} else {


include '../database.php';

$id = $_GET['id'];

echo '<form action="editpoll.php" method="POST">';
$conn = new mysqli($host, $user, $pass, $db);

if ($stmt = $conn->prepare("SELECT * FROM poll_options WHERE poll_id = ?")) {

  $stmt -> bind_param("i", $id);
  $stmt -> execute();
  $result = $stmt -> get_result();


    while($row = $result -> fetch_assoc()) {
      ?>

      <input type="text" name="id[<?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?>]" value="<?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?>">
      <br/>

      <?php

    }

}



echo '<input type="submit" value="Edit">';


}

 ?>
