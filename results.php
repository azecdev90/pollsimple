<?php

include 'database.php';

  $conn = new mysqli($host, $user, $pass, $db);
  $id = $_POST['id'];

  $votes = array();
  $stmt = $conn->prepare("SELECT * FROM votes WHERE poll_id  = ? ORDER by poll_option_id");
  $stmt->bind_param("i", $id);
  $stmt->execute();

  $result = $stmt->get_result();

  while($row = $result->fetch_assoc()) {
    $votes[] = $row['votes'];
}



  $total = array_sum($votes);

  if($total == 0){
    echo 'No vote. Be first!';
  } else {

    $percent1 = ($votes[0] / $total)*100;
    $rounded1 = round($percent1);

    $percent2 =($votes[1]/$total)*100;
    $rounded2 = round($percent2);

    $percent3 = ($votes[2]/$total)*100;
    $rounded3 = round($percent3);

    $percent4 = ($votes[3]/$total)*100;
    $rounded4 = round($percent4);
 ?>

  <img src="assets/images/background.jpg" width="<?php echo $rounded1*2; ?>" height="22"><strong><?php echo htmlspecialchars($rounded1, ENT_QUOTES,'UTF-8').'%'; ?><br></strong>
  <img src="assets/images/background.jpg" width="<?php echo $rounded2*2; ?>" height="22"><strong><?php echo htmlspecialchars($rounded2, ENT_QUOTES, 'UTF-8').'%'; ?><br></strong>
  <img src="assets/images/background.jpg" width="<?php echo $rounded3*2; ?>" height="22"><strong><?php echo htmlspecialchars($rounded3, ENT_QUOTES, 'UTF-8').'%'; ?><br></strong>
  <img src="assets/images/background.jpg" width="<?php echo $rounded4*2; ?>" height="22"><strong><?php echo htmlspecialchars($rounded4, ENT_QUOTES, 'UTF-8').'%' ?><br></strong>
  <?php

}

 ?>
