<?php
session_start();

include '../database.php';

if(!isset($_SESSION['username'])){
  header('Location: login.html');
} else {
    echo "<a href=\"adduser_form.php\">Add admin</a>";
    echo "<a href=\"addpoll_form.php\">Add poll</a>";
    echo "<a href=\"logout.php\">Logout</a>";

    $conn = new mysqli($host, $user, $pass, $db);
    $query = $conn->query("SELECT * FROM poll")
    ?>

  <form action="delete.php" method="POST">
    <?php

  while($row = $query -> fetch_assoc()){

    ?>
    <input type="checkbox" name="id[]" value="<?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?>">
    <a href="editpoll_form.php?id=<?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($row['poll_title'], ENT_QUOTES, 'UTF-8'); ?></a>

    <?php
  }
  ?>

      <input type="submit" value="Delete">
  <?php

  }



 ?>
