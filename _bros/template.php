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

    <!--info css file-->
      <link href="bros.css" rel="stylesheet" type="text/css">
    
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
<img class="wide" id="width" src="_images/f2.jpg" alt="header">
</div>


<!-- full navbar -->
<nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: -1;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php" id="xlarge">  SigRho UF  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li><a href="/index.php" id="large"> HOME <span class="sr-only">(current)</span></a></li>

        <!--Information Drowdown-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"id="large"> ABOUT US <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/_info/national.php" title="National History" id="medium">NATIONAL HISTORY</a></li>
            <li><a href="/_info/chapter.php" title="Chapter History" id="medium">CHAPTER HISTORY</a></li>
            <li><a href="/_info/pillar.php" title="Pillars" id="medium">OUR PILLARS</a></li>
            <li><a href="/_info/philanthropy.php" title="Philanthropy" id="medium">OUR PHILANTHROPIES</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" id="medium">CLOSE</a></li>
          </ul>
        </li>

        <!--Brothers Dropdown-->
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"id="large"> BROTHERS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="s2.php" title="Spring 2002" id="medium">Α-ALPHA | SPRING 02</a></li>
            <li><a href="f2.php" title="Fall 2002" id="medium">Β-BETA | FALL 02</a></li>
            <li><a href="f3.php" title="Fall 2003" id="medium">Γ-GAMMA | FALL 03</a></li>
            <li><a href="s5.php" title="Spring 2005" id="medium">Δ-DELTA | SPRING 05</a></li>
            <li><a href="f5.php" title="Fall 2005" id="medium">E-EPSILON | FALL 05</a></li>
            <li><a href="s6.php" title="Spring 2006" id="medium">Z-ZETA | SPRING 06</a></li>
            <li><a href="f6.php" title="Fall 2006" id="medium">H-HETA | FALL 06</a></li>
            <li><a href="s7.php" title="Spring 2007" id="medium">Θ-THETA | SPRING 07</a></li>
            <li><a href="f7.php" title="Fall 2007" id="medium">Ι-IOTA | FALL 07</a></li>
            <li><a href="s8.php" title="Spring 2008" id="medium">K-KAPPA | SPRING 08</a></li>
            <li><a href="s9.php" title="Spring 2009" id="medium">Λ-LAMBDA | SPRING 09</a></li>
            <li><a href="f9.php" title="Fall 2009" id="medium">M-MU | FALL 09</a></li>
            <li><a href="f10.php" title="Fall 2010" id="medium">N-NU | FALL 10</a></li>
            <li><a href="s12.php" title="Spring 2012" id="medium">Ξ-XI | SPRING 12</a></li>
            <li><a href="f12.php" title="Fall 2012" id="medium">O-OMICRON | FALL 12</a></li>
            <li><a href="s13.php" title="Spring 2013" id="medium">Π-PI | SPRING 13</a></li>
            <li><a href="f13.php" title="Fall 2013" id="medium">P-RHO | FALL 13</a></li>
            <li><a href="f14.php" title="Fall 2014" id="medium">Σ-SIGMA | FALL 14</a></li>
            <li><a href="f15.php" title="Fall 2015" id="medium">T-TAU | FALL 15</a></li>
            <li><a href="f16.php" title="Fall 2016" id="medium">Υ-UPSILON | FALL 16</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" id="medium">CLOSE</a></li>
          </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/rush.php" title="Rush" id="large">RUSH</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 

<!--BREADCRUMBS Left-->
<section class="container-fluid">  
  <div class="col-sm-2 col-sm-offset-1">
      <p> </p>
    <center>
        <ul class="pagination pagination-sm" id="pages">
            <!--TODO SET CLASS="ACTIVE"-->
            <li><a href="s2.php" title="Spring 2002" id="medium">Α-ALPHA | SPRING 02</a></li><br>
            <li class="active"><a href="f2.php" title="Fall 2002" id="medium">Β-BETA | FALL 02</a></li><br>
            <li><a href="f3.php" title="Fall 2003" id="medium">Γ-GAMMA | FALL 03</a></li><br>
            <li><a href="s5.php" title="Spring 2005" id="medium">Δ-DELTA | SPRING 05</a></li><br>
            <li><a href="f5.php" title="Fall 2005" id="medium">E-EPSILON | FALL 05</a></li><br>
            <li><a href="s6.php" title="Spring 2006" id="medium">Z-ZETA | SPRING 06</a></li><br>
            <li><a href="f6.php" title="Fall 2006" id="medium">H-HETA | FALL 06</a></li><br>
            <li><a href="s7.php" title="Spring 2007" id="medium">Θ-THETA | SPRING 07</a></li><br>
            <li><a href="f7.php" title="Fall 2007" id="medium">Ι-IOTA | FALL 07</a></li><br>
            <li><a href="s8.php" title="Spring 2008" id="medium">K-KAPPA | SPRING 08</a></li><br>
            <li><a href="s9.php" title="Spring 2009" id="medium">Λ-LAMBDA | SPRING 09</a></li><br>
            <li><a href="f9.php" title="Fall 2009" id="medium">M-MU | FALL 09</a></li><br>
            <li><a href="f10.php" title="Fall 2010" id="medium">N-NU | FALL 10</a></li><br>
            <li><a href="s12.php" title="Spring 2012" id="medium">Ξ-XI | SPRING 12</a></li><br>
            <li><a href="f12.php" title="Fall 2012" id="medium">O-OMICRON | FALL 12</a></li><br>
            <li><a href="s13.php" title="Spring 2013" id="medium">Π-PI | SPRING 13</a></li><br>
            <li><a href="f13.php" title="Fall 2013" id="medium">P-RHO | FALL 13</a></li><br>
            <li><a href="f14.php" title="Fall 2014" id="medium">Σ-SIGMA | FALL 14</a></li><br>
            <li><a href="f15.php" title="Fall 2015" id="medium">T-TAU | FALL 15</a></li><br>
            <li><a href="f16.php" title="Fall 2016" id="medium">Υ-UPSILON | FALL 16</a></li><br>
        </ul>
    </center>
    <br>
  </div>

<!--INFO Right-->
  <div class="col-md-6 col-md-offset-1">
    <p> </p>
    <center>

<!--TODO Title-->
<div class="row">
    <h2>#### LINE</h2>
    <h3>SEMESTER</h3>
    <h3>PLEDGE MASTER: BROTHER ###### </h3>
    <p>______________________________________________________________</p>
</div>

        <!-- TODO SET DIVISIONS BASED ON NUMBER OF BROTHERS -->
        <div class="col-md-6">
            <!-- TODO FILL IN INFO -->
            <p id="centered">
                <img src="#" alt="brother" id="profile">

                <br>
                # Mr. FIRST LAST
                <br>
                Brother 
                <br>
                Fields: 
                <br>
                Classification: 
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