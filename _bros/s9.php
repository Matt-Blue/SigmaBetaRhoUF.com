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

    <!--bros css file-->
      <link href="bros.css" rel="stylesheet" type="text/css">
    <!--bros navbar-->
      <?php include('navBro.php');?>
    
</head>
<body> 





<!--Logged Out-->

<?php
    if (!isset($_SESSION['id'])){
?>

<!--Making space between top and background image so the navbar doesn't cover the image-->
<section class="container-fluid">  
    <center><header class="col-md-12"><p></p></header></center>
</section>

<!--TODO Header image for Line-->
<div class="row">
<img class="wide" id="width" src="_images/s9.png" alt="header">
</div>

<!--BREADCRUMBS Left-->
<section class="container-fluid">  

<!--INFO Right-->
  <div class="col-md-8 col-md-offset-2">
    <p> </p>
    <center>

<!--TODO Title-->
<div class="row">
    <h2>LAMBDA LINE</h2>
    <h3>SPRING 2009</h3>
    <h3>PLEDGE MASTER: BROTHER IGNEOUS </h3>
    <p>______________________________________________________________</p>
</div>

<!-- THREE BROTHERS -->
        <div class="col-md-4">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/s91.jpg" alt="brother" id="profile">

                <br>
                #36 Mr. Jerin George
                <br>
                Brother Top Gun
                <br>
                Field: Medicine
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>
        <div class="col-md-4">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/s92.png" alt="brother" id="profile">

                <br>
                #37 Mr. Michael Vempala
                <br>
                Brother W.H.I.P.
                <br>
                Field: Medicine
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>
        <div class="col-md-4">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/s93.jpg" alt="brother" id="profile">

                <br>
                #38 Mr. Justin Zacharias
                <br>
                Brother Slumdog
                <br>
                Field: Pharmicology
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>

<!-- THREE BROTHERS -->
        <div class="col-md-4">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/s94.jpg" alt="brother" id="profile">

                <br>
                #39 Mr. Nirav Patel
                <br>
                Brother C-4
                <br>
                Field: Law
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>

        <div class="col-md-4">
            <!-- TODO FILL IN INFO-->
            <p id="centered">
                <img src="_images/s95.jpg" alt="brother" id="profile">

                <br>
                #40 Mr. Nicholas Joseph
                <br>
                Brother Craftsman
                <br>
                Field: Pharmicology
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>
        <div class="col-md-4">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/s96.png" alt="brother" id="profile">

                <br>
                #41 Mr. Neal Patel
                <br>
                Brother King Kong
                <br>
                Field: Medicine
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>
    </center>
</div>

</section>

<?php
    }
?>

<!--Contact Section-->
<section class="container-fluid">
    <center>
        <div class="row">
        <div class="col-md-12" id="border">
            <p>Contact us at: sigrhouf@gmail.com</p>
        </div>
        </div>
    </center>
</section>

<!--Social Media Links-->
<section class="container-fluid">
    <center>
        <div class="row">

          <div class="col-md-1 col-md-offset-4" id="border">
            <a href="https://www.facebook.com/ufsigrho/">
              <img src="/_images/facebook.png" alt="Facebook" style="width:50px;height:50px;">
            </a>
          </div>

          <div class="col-md-1" id="border">
            <a href="https://twitter.com/sigrhouf?lang=en">
              <img src="/_images/twitter.jpg" alt="Twitter" style="width:50px;height:50px;">
            </a>
          </div>

          <div class="col-md-1" id="border">
            <a href="https://www.instagram.com/sigrhouf/">
              <img src="/_images/instagram.png" alt="Instagram" style="width:50px;height:50px;">
            </a>
          `</div>

          <div class="col-md-1" id="border">
            <a href="https://www.youtube.com/watch?v=Xeru3QihuFM">
              <img src="/_images/youtube.jpg" alt="Youtube" style="width:100px;height:50px;">
            </a>
          `</div>

        </div>
    </center>
</section>

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