<?php
  function insertPost() {
   
    if(isset($_POST["send"])) {
     global $db_conx;
     global $log_id;
      $content = $_POST['content']);
      
      $insert = "INSERT INTO fb_post (user_id,post_content,date_created) VALUES ('$log_id','$content', NOW())";
      
      $run= mysqli_query($db_conx,$insert);
      
        if ($run) {
          echo "<h2>insert successful</h2>";
        }
    }
  }
?>