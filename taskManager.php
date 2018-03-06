<?php
    session_start();
?>
<!doctype html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sigma Beta Rho UF</title>
    <!--TODO set icon-->
    <link rel="shortcut icon" type="image/x-icon" href="_images/crest.jpg" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- HTML5 for IE backwards compatability-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--Setting CSS files based on whether or not a session is in progress-->
    <!--Front End-->
    <?php
    if (!isset($_SESSION['id'])){
    ?>
      <link href="frontend.css" rel="stylesheet" type="text/css">
      <?php include('nav.php'); ?>
    <?php
    }
    ?>
    
    <!--Back End-->
    <?php
    if (isset($_SESSION['id'])){
    ?>
      <link href="backend.css" rel="stylesheet" type="text/css">
      <?php include('navLogin.php'); ?>
    <?php
    }
    ?>

    <!--Admin-->
    <?php
      if (isset($_SESSION['id'])){
        if ($_SESSION['id']==1){
    ?>
      <?php include('navAdmin.php');?>
    <?php
        }
      }
    ?>
    
</head>
<body> 

<!--Secretary Task Manager-->

<?php
  if (isset($_SESSION['id'])){
    if ($_SESSION['id']==1){
?>

<center>
<div class="container-fluid">
<div class="col-md-12">
<?php
    if (isset($_SESSION['id'])){
        echo "<p>Welcome administrator ".$_SESSION['codeName'].", your session ID is ".$_SESSION['id']."</p>";
    }
?>
</div>
</div>
</center>

<!--Title-->
<section class="container-fluid">  
    <center><header class="col-md-12"><h1><br> Task Manager <br></h1></header></center>
    <br>
</section>

<!--Displaying all current tasks in database-->
<?php

    //Delete from database
    if(isset($POST['delete']) && isset($POST['priority'])){
        $priority = get_post($conn, 'priority');
        $query = "DELETE FROM tasks WHERE priority='priority'";
        $result = $conn->query($query);
        if(!$result) echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
    }

    //NOTE THE SOLUTION TO HOW I WANT THIS TASK MANAGER TO WORK IS IN JAVASCRIPT AND AJAX
    //THIS WILL HAVE TO BE DONE AT A LATER TIME, THEREFORE I AM PUTTING THIS PROJECT ON THE BACK BURNER    
    
?>

<!--Create Tasks-->
<div class="col-md-4 col-md-offset-4">
<center>

<h3>Create a Task</h3>

<form action="taskSign.php" method="POST">

  <div class="form-group">
      <input class="form-control" type="text" name="name" placeholder="Task Name">
  </div>
  <div class="form-group">
      <input class="form-control" type="number" name="priority" placeholder="Priority">
  </div>
  <div class="form-group">
      <input class="form-control" type="date" name="date" placeholder="Date">
  </div>
  <div class="form-group">
      <input class="form-control" type="text" name="category" placeholder="Category">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</center>
</div>

<?php
    }
    }
?>

<!-- footer -->
<section class="container-fluid">
    <center>
        <footer class="col-md-12">
          Sigma Beta Rho at University of Florida<br>
          <div id="smaller">Made From Scratch by Matthew Bluestein</div>
          <br>
        </footer>
    </center>
</section>
    
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>