<?php
session_start();

if(!isset($_SESSION['username'])) {
  header('Location: login.html');
}else {

 ?>
<html>
<head>
</head>
<body>

<h1> Add Administrator </h1>

<form action="adduser.php" method="post">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br/>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <br/>
    <input type="submit" value="Add Administrator">
</form>
</body>
</html>
<?php
}

 ?>
