<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script  type="text/javascript" src="assets/js/ajax.js"></script>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <a href="https://github.com/azecdev90" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#64CEAA; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
  <div id="main">
    <h1>Pollsimple</h1>
    <p>Pollsimple is project writen in PHP programming language. Intention of this script is to provide some basic functionality to anyone who needs this features in webpage. This script allows you on easy and simple way to work with polls on your webapge. It is consisted from features like adding new polls, edit polls and delete polls. Results are shown in graphical format.</p>
    <p>If you think that you can improve this software, dont hesitate to contact me and propose changes in this project on any way. You can support this project by using this software. Contact me on my Github account by  clicking in right upper corner of this page.</p>

    <?php
    include 'database.php';

    $conn = new mysqli($host, $user, $pass, $db);
    $query = $conn-> query("SELECT * FROM poll ORDER BY id DESC LIMIT 1");

    while($row = $query -> fetch_assoc()){
      ?>
      <h3>
      <?php echo htmlspecialchars($row['poll_title'], ENT_QUOTES,'UTF-8'); ?> </h3> <?php
      $id = $row['id'];
    }

?>

  <div id="form">
    <form action="vote.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <?php

      $stmt = $conn-> prepare("SELECT * FROM poll_options WHERE poll_id  = ? ORDER BY pol ASC");
      $stmt -> bind_param("i", $id);
      $stmt -> execute();
      $result = $stmt -> get_result();
      $i = 1;
      while($row = $result -> fetch_assoc()) {

        ?>
        <input type="radio" name="options" value="<?php echo $i++; ?>" class="space"><?php echo htmlspecialchars($row['name'], ENT_QUOTES,'UTF-8'); ?><br>

        <?php
        }
        ?>

        <input type="submit" value="Vote" name="vote" class="vote">
      </form>
      <button onclick="loadResults(<?php echo $id; ?>)">Results</button>
    </div>
    <div id="results">

  </div>
  </div>

</body>
</html>
