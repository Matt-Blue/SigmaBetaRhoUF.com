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




<!--Logged In-->
<!--Normal Brother navbar and title display-->

<?php
    if (isset($_SESSION['id']) && $_SESSION['id']!=1){
?>

<center>
<div class="container-fluid">
<div class="col-md-12">
<?php
    if (isset($_SESSION['id'])){
        echo "<p>Welcome brother ".$_SESSION['codeName'].", your session ID is ".$_SESSION['id']."</p>";
    }
?>
</div>
</div>
</center>

<!--Title-->
<section class="container-fluid">  
    <center><header class="col-md-12"><h1><br> TASKS <br></h1></header></center>
    <br>
</section>

<?php
    }
?>





<!--Secretary Section-->
<!--Admin Page-->
<!--Has the ability to create brothers and manage events to be displayed to brothers-->

<?php
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
    <center><header class="col-md-12"><h1><br> Administrator Tasks <br></h1></header></center>
    <br>
</section>

<?php
    }
?>




<!--Information by active member-->
<!--Set the session id to the correct number based on the number associated with the account in the database-->
<!--

TODO
List of active members and their id's
1. Administrator

-->
<?php
  if ($_SESSION['id']==1){
?>

<!--Tasks-->
<section class="container-fluid">
  <div class="col-md-4 col-md-offset-4">
    <left>  
      <p>1. Finish Rush Calendar </p><br>
      <p>2. Additional functionality for backend </p><br>
      <div class="col-md-11 col-md-offset-1">
        <p>   a. file management system </p><br>
        <p>   b. hit counter for visitors </p><br>
        <div class="col-md-11 col-md-offset-1">
          <p>https://www.thoughtco.com/cool-things-to-do-with-php-2693857</p>
        </div>
        <p>   c. web forum </p><br>
        <div class="col-md-11 col-md-offset-1">
          <p>https://www.thoughtco.com/cool-things-to-do-with-php-2693857</p>
        </div>
        <p>   d. poll </p><br>
        <div class="col-md-11 col-md-offset-1">
          <p>https://www.thoughtco.com/cool-things-to-do-with-php-2693857</p>
        </div>
        <p>   e. set cookies </p><br>
        <div class="col-md-11 col-md-offset-1">
          <p>https://www.thoughtco.com/cool-things-to-do-with-php-2693857</p>
        </div>
      </div>
    </left>
  </div>
</section>

<?php
  }
?>

<?php
  if ($_SESSION['id']==2){
?>

<!--Tasks-->
<section class="container-fluid">
  <div class="col-md-12">
    <center>
      <br><h2> Tasks for the week of ___ </h2><br>
    </center> 
  </div>

  <div class="col-md-4 col-md-offset-4">
    <left>
      <p>Name: </p>
      <p>Date: </p>
      <p>Time: </p>
      <p>Location: </p>
      <p>Details: </p>
      <br>
    </left>
  </div>
</section>

<!--Items checked out-->
<section class="container-fluid">
  <div class="col-md-12">
    <center>
      <br><h2> Items Checked Out </h2><br>
    </center> 
  </div>

  <div class="col-md-4 col-md-offset-4">
    <left>
      <p>Item 1: </p>
      <p>Item 2: </p>
      <br>
    </left>
  </div>
</section>

<?php
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