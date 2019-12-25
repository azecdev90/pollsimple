<?php
session_start();

if(!isset($_SESSION['username'])) {
  header('Location: login.html');
}else {



 ?>

 <form action="addpoll.php" method="post">
   <br/>
     Type your question:
        <br/>
      <input type="text"  name="title">
     <br/>
    Option one<input type="text" name="options[]">
     <br/>
    Option two <input type="text" name="options[]">
     <br/>
  Option three <input type="text" name="options[]">
     <br/>
    Option four <input type="text" name="options[]">
     <br/>
     <input type="submit" value="Add poll">
 </form>

<?php

}
 ?>
