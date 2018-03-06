<?php
  include 'DBH.php';

  session_start();

  $uid = htmlentities($_POST['uid']);
  $pwd = htmlentities($_POST['pwd']);

  //inserting all values taken from other form into sql database
  $sql = "SELECT * FROM members WHERE uid='$uid' AND pwd='$pwd'";

  $result = mysqli_query($conn, $sql);

  //check login
  if(!$row = mysqli_fetch_assoc($result)){
    echo "Your username or password is incorrect!";
  }else{
    //sets session variables
    $_SESSION['id'] = $row['id'];
    $_SESSION['codeName'] = $row['codeName'];
  }

  //takes you back to the homepage
  header("Location: index.php");
?>