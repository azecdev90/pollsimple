<?php

session_start();

if(!isset($_SESSION['username'])) {
  header('Location: login.html');
}else {

?>


 <form action="changepassword.php" method="post">
   <br/>
    <h1> Administrator password:</h1>
     New password:<input type="password" name="password"><br/>
    <input type="submit" value="Change">
 </form>



<?php


}




 ?>
