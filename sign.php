<?php
  require_once 'DBH.php';

  session_start();

  $codeName = htmlentities($_POST['codeName']);
  $first = htmlentities($_POST['first']);
  $last = htmlentities($_POST['last']);
  $phone = htmlentities($_POST['phone']);
  $email = htmlentities($_POST['email']);
  $pro = htmlentities($_POST['pro']);
  $description = htmlentities($_POST['description']);
  $uid = htmlentities($_POST['uid']);
  $pwd = htmlentities($_POST['pwd']);

  //inserting all values taken from other form into sql database
  $sql = "INSERT INTO members (codeName, first, last, phone, email, pro, description, uid, pwd) 
          VALUES ('$codeName', '$first', '$last', '$phone', '$email', '$pro', '$description', '$uid', '$pwd')";

  $result = mysqli_query($conn, $sql);

  //takes you back to the homepage
  header("Location: index.php");
?>