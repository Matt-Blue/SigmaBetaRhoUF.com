<?php
  require_once 'DBH.php';

  session_start();

  //Check for data and then insert it
    if(
        isset($_POST['name'])
        &&
        isset($_POST['priority'])
        &&
        isset($_POST['date'])
        &&
        isset($_POST['category'])
    ){
        $name = htmlentities($_POST['name']);
        $priority = htmlentities($_POST['priority']);
        $date = htmlentities($_POST['date']);
        $category = htmlentities($_POST['category']);
    } 

  //inserting all values taken from other form into sql database
  $sql = "INSERT INTO tasks (name, priority, date, category) 
          VALUES ('$name', '$priority', '$date', '$category')";

  $result = mysqli_query($conn, $sql);

  //takes you back to the homepage
  header("Location: index.php");
?>