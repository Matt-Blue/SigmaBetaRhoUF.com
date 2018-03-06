<?php
  //makes sure the session is started
  session_start();
  //logs you out by destroying session
  session_destroy();
  //takes you back to the homepage
  header("Location: index.php");
?>