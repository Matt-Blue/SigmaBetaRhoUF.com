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
    <link rel="icon" href="https://www.sigrho.org/favicon.ico" />
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
      <?php include('navLog.php'); ?>
    <?php
    }
    ?>
    
    <!--Back End-->
    <?php
    if (isset($_SESSION['id'])){
    ?>
      <link href="backend.css" rel="stylesheet" type="text/css">
    <?php
    }
    ?>
    
</head>
<body> 

<!--Logged Out-->
<!--TODO once the system is implemented there cannot be a link to create brothers-->

<?php
    if (!isset($_SESSION['id'])){
?>

<!-- Title -->
<section class="container-fluid">  
<center><header class="col-md-12"><h1><br>Cobra Login<br></h1></header></center>
<br>
</section>

<!--Bootstrap Login Form-->
<div class="col-md-4 col-md-offset-4">
<center>
<form action="log.php" method="POST">
  <div class="form-group">
    <div class="col-10">
      <input class="form-control" type="username" id="user" name="uid" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="pass" placeholder="Password" name="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</center>
</div>

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

<?php
    }
?>
    
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>