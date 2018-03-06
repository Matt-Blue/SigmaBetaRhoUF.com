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
<img class="wide" id="width" src="_images/national.jpg" alt="header">
</div>

<!--BREADCRUMBS Left-->
<section class="container-fluid">  
  <div class="col-md-3 col-md-offset-1">
      <p> </p>
    <center>
        <ul class="pagination pagination-lg" id="pages">
            <li class="active"><a href="#">NATIONAL HISTORY</a></li><br>
            <li><a href="chapter.php">CHAPTER HISTORY</a></li><br>
            <li><a href="pillar.php">OUR PILLARS</a></li><br>
            <li><a href="philanthropy.php">OUR PHILANTHROPIES</a></li>
        </ul>
    </center>
    <br>
  </div>

<!--INFO Right-->
  <div class="col-md-6">
      <p> </p>
    <center><header><h2>NATIONAL HISTORY</h2></header></center>
    <center><header><h3>EST. AUGUST 16, 1996<br></h3></header></center>

    <p> </p>

    <center><p id="justified">Our pillars of Society, Brotherhood, and Remembrance were established upon the formation of the Alpha Chapter at 
        the University of Pennsylvania in Philadelphia on August 16, 1996. Our Founders realized the unique promise of a 
        greek-lettered organization that instills positive values amongst its members, provides an avenue for leadership, and 
        promotes self-betterment.</p></center>
    <center><p id="justified">As their fraternity developed, these Founders understood that they must maintain a constant and growing nationwide 
        network in order to truly manifest their organizational vision. As such, several new brothers were inducted on August 22, 
        1998 in New York. At that time, eight men from three different universities were given the status of National Founding 
        Fathers as they were the visionaries who had established a fraternity that would last for years to come.</p></center>
    <br>

    <center><header><h3>NATIONAL FOUNDING FATHERS<br></h3></header></center>
    <p> </p>
    <!--Left-->
    <div class="col-md-4 col-md-offset-1">
        <center><p id="centered">
            Mr. Saiful Khandker<br>
            Mr. Shoor Kalam<br>
            Mr. Russell Abdullah<br>
            Mr. Bonit Sharma
        </p></center>
    </div>
    <!--Right-->
    <div class="col-md-4 col-md-offset-2">
        <center><p id="centered">
            Mr. Rajan Dogra<br>
            Mr. Neil Datta<br>
            Mr. Suman Ghosh<br>
            Mr. Anuj Datta
        </p></center>
    </div>
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