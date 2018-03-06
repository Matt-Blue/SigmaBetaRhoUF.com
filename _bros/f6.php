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

<!--BREADCRUMBS Left-->
<section class="container-fluid">  

<!--INFO Right-->
  <div class="col-md-8 col-md-offset-2">
    <p> </p>
    <center>

<!--TODO Title-->
<div class="row">
    <h2>ETA LINE</h2>
    <h3>FALL 2006</h3>
    <h3>PLEDGE MASTER: BROTHER TREMBLE </h3>
    <p>______________________________________________________________</p>
</div>

<!-- PAIR OF BROTHERS -->
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/f61.jpg" alt="brother" id="profile">

                <br>
                #16 Mr. Edwin James
                <br>
                Brother Scheme
                <br>
                Field: Pharmicology
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/f62.jpg" alt="brother" id="profile">

                <br>
                #17 Mr. Sanil Kanjookaran
                <br>
                Brother SNAP!
                <br>
                Field: Pharmicology
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>

<!-- PAIR OF BROTHERS -->
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/f63.jpg" alt="brother" id="profile">

                <br>
                #18 Mr. Saahil Patel
                <br>
                Brother Mo-Bile
                <br>
                Field: Nutrition
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/f64.jpg" alt="brother" id="profile">

                <br>
                #19 Mr. Edwin Johnson
                <br>
                Brother Bain
                <br>
                Field: Architecture
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>

<!-- PAIR OF BROTHERS -->
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/f65.png" alt="brother" id="profile">

                <br>
                #20 Mr. Amar Patel
                <br>
                Brother Sho-gun
                <br>
                Field: Law
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/f66.png" alt="brother" id="profile">

                <br>
                #21 Mr. Murali Iyyani
                <br>
                Brother Hotshot
                <br>
                Field: Medical Administration
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>

<!-- PAIR OF BROTHERS -->
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/f67.jpg" alt="brother" id="profile">

                <br>
                #22 Mr. Fazle Hasnain
                <br>
                Brother Godzilla
                <br>
                Field: U.S. Army Specialist
                <br>
                Classification: Alumni
                <br>
            </p>
        </div>
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="_images/f68.jpg" alt="brother" id="profile">

                <br>
                #23 Mr. Jason Idiculla
                <br>
                Brother Threshold
                <br>
                Field: Optometry
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