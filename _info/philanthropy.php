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

    <!--info css file-->
      <link href="info.css" rel="stylesheet" type="text/css">
    <!--navbar-->
      <?php include('navInfo.php');?>
    
</head>
<body> 





<!--Logged Out-->
<!--TODO once the system is implemented there cannot be a link to create brothers-->

<?php
    if (!isset($_SESSION['id'])){
?>

<!--Making space between top and background image so the navbar doesn't cover the image-->
<section class="container-fluid">  
    <center><header class="col-md-12"><p></p></header></center>
</section>



<!--Header image for homepage-->
<div class="row">
<img class="wide" id="width" src="_images/sos.jpg" alt="header">
</div> 

<!--BREADCRUMBS Left-->
<section class="container-fluid">  
  <div class="col-md-3 col-md-offset-1">
      <p> </p>
    <center>
        <ul class="pagination pagination-lg" id="pages">
            <li><a href="national.php">NATIONAL HISTORY</a></li><br>
            <li><a href="chapter.php">CHAPTER HISTORY</a></li><br>
            <li><a href="pillar.php">OUR PILLARS</a></li><br>
            <li class="active"><a href="#">OUR PHILANTHROPIES</a></li>
        </ul>
    </center>
    <br>
  </div>

<!--INFO Right-->
  <div class="col-md-6">
      <p> </p>
    <center><header><h2>OUR PHILANTHROPIES</h2></header></center>

    <center><p id="psmall">_________________________________________________________________________</p></center>

    <!--Left-->
    <center>
    <div class="col-md-6">
        <h4>SOS CHILDREN'S VILLAGES - USA</h4>
        <p id="centered">
            We work to prevent family breakdown and care for children who have lost parental care, or who risk losing 
            it. We work with communities, partners and states to ensure that the rights of all children, in every society, are 
            respected and fulfilled.
        </p>
        <p id="centered">
            We are non-governmental and non-denominational. We respect all religions and cultures and work with trusted partners 
            in places where we can contribute to social development.
        </p>

        <!--SOS Link-->
        <div id="wborder">
        <a href="http://www.sos-childrensvillages.org/" id="link">www.sos-childrensvillages.org</a>
        </div>
        <br><br><br>

        <!--SOS Youtube Video-->
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/MRoYWO-4Txo" frameborder="0" allowfullscreen></iframe>
    </div>
    </center>
    <!--Right-->
    <center>
    <div class="col-md-6">
        <h4>AKASH AND SHAI KURUVILLA MEMORIAL SCHOLARSHIP FUND</h4>
        <p id="centered">
            The Akash and Shai Kuruvilla Memorial Scholarship Fund, Inc. was formed in the Fall of 2007 to remember the life of 
            Akash Jacob Kuruvilla and to continue his legacy of excellence and generosity posthumously.
        </p>
        <p id="centered">
            Having committed to honor, leadership, diversity, integrity, loyalty and wisdom, Akash Kuruvilla influenced a multitude 
            that had the pleasure of being in his presence. The ideal scholarship recipients will embody those same principles and shall 
            be committed to positively affecting the community throughout their collegiate years and beyond.
        </p>
        <div id="wborder">
        <a href="http://askmsf.com/index.html" id="link">
            www.askmsf.com<br>
            <img src="_images/AK.jpg" alt="ak" width="100%" height="100%">
        </a>
        </div>
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