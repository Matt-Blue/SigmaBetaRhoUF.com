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





<!--Logged Out-->
<!--TODO once the system is implemented there cannot be a link to create brothers-->

<?php
    if (!isset($_SESSION['id'])){
?>

<!--Making space between top and background image so the navbar doesn't cover the image-->
<section class="container-fluid">  
    <center><header class="col-md-12"><p></p></header></center>
</section>
<!--Background image for homepage-->
<div class="row">
<img class="wide" id="width" src="_images/home.jpg" alt="home">
</div>

<!--Title-->
<section class="container-fluid">  
  <div class="col-md-12">
    <center><header><h2><br><br>Sigma Beta Rho Fraternity Incorperated</h2></header></center>
    <center><header><h3>Pi Chapter - University of Florida<br></h3></header></center>
    <br>
  </div>
</section>

<!--Main Information-->
<section class="container-fluid">  
  <div class="col-md-8 col-md-offset-2">

    <center><p id="psmall"><br>ΣΒΡ was established at The University of Florida to instill leadership qualities in campus men, organize 
    and motivate UF men to provide service to our society, and to raise cultural awareness on our campus. Sigma Beta Rho empowers 
    its members to be leaders in the greek community at the University of Florida and in our society. Because our community and 
    society has been so generous in harboring our brotherhood and ideals, we have done our part as a brotherhood to give back to 
    our community through our various community service and philanthropic efforts. We have worked with organizations such as the 
    S.O.S. Children's Villages International and Akash and Shai Kuruvilla Memorial Scholarship Fund to offer our brothers, as well 
    as the rest of our community, an opportunity of serve society.</p></center>
    
    <center><p id="psmall">Modern day Sigma Beta Rho has grown considerably since its inception. It has expanded from its roots on 
      the east coast to more than forty recognized chapters and colonies that span the breadth of the nation. This growth stems 
      from a reputation for excellent, values-based programming, diversity amongst our brotherhood, and alignment with the ideals 
      of many students who strive for a competitive edge before entering a post-globalized working world.</p></center>

    <center><p id="psmall">As an organization that prides itself on having individuals from every continent, ethnicity, and 
      religion, we seek to foster enriching, cross-cultural discourse both amongst our members and within our campus communities. 
      Through the efforts of our brothers, we have become the largest, most expansive fraternity of our kind in seventeen years. 
      With each passing day, we strive to take one more step towards realizing the nationwide network envisioned by our National 
      Founding Fathers.</p></center>

  </div>
</section>

<section class="container-fluid">  
  <div class="col-md-12">
    <center><p id="psmall">__________________________________________________________________________________________________________________</p></center>

  </div>
</section>

<section class="container-fluid" id="whiteback">

  <!--Left Side-->
  <div class="col-md-4 col-md-offset-2" id="whiteback">
    <p> </p><br>
    <center><img src="_images/chrest.jpg" alt="Quick Facts" width="100%"></center>
    <p> </p><br>
  </div>

  <!--Right Side-->
  <div class="col-md-4" id="whiteback">
    <center><h4 id="pblarge">QUICK FACTS<br></h4></center>

    <center><p id="pbsmall"><br>
    Nickname: SigRho<br>
    Colors: Red, Black, Green<br>
    Mascot: King Cobra<br>
    Pillars: Society, Brotherhood, and Remembrance<br>
    Motto: "Brotherhood Beyond All Barriers"<br>
    Philanthropy: SOS Children's Villages and Akash and Shai Kuruvilla Memorial Scholarship Fund<br>
    Nationally Founded: August 16, 1996, University of Pennsylvania<br>
    UF Chapter Founded: May 31st, 2002</p></center>
  </div>

</section>

<?php
    }
?>







<!--Logged In-->
<!--Normal Brother login display page-->

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
    <center><header class="col-md-12"><h1><br> Cobra Cartel Login Screen <br></h1></header></center>
    <br>
</section>

<section class="container-fluid">
    <center>
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <center>
            <p>More to come for the Cobra Cartel Login Screen including a chatbox, private storage and a synchronized calendar to keep everyone up to date</p>
          </center>
        </div>
        </div>
    </center>
</section>

<?php
    }
?>





<!--Secretary Section-->
<!--Admin Page-->
<!--Has the ability to create brothers and manage events to be displayed to brothers-->

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
    <center><header class="col-md-12"><h1><br> Cobra Cartel Admin Page <br></h1></header></center>
    <br>
</section>

<?php
    }
    }
?>

<!--Contact Section-->
<?php
  if (!isset($_SESSION['id'])){
?>
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