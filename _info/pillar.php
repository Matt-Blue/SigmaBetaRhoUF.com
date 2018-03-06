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
<img class="wide" id="width" src="_images/pillar.jpg" alt="header">
</div>

<!--BREADCRUMBS Left-->
<section class="container-fluid">  
  <div class="col-md-3 col-md-offset-1">
      <p> </p>
    <center>
        <ul class="pagination pagination-lg" id="pages">
            <li><a href="national.php">NATIONAL HISTORY</a></li><br>
            <li><a href="chapter.php">CHAPTER HISTORY</a></li><br>
            <li class="active"><a href="#">OUR PILLARS</a></li><br>
            <li><a href="philanthropy.php">OUR PHILANTHROPIES</a></li>
        </ul>
    </center>
    <br>
  </div>

<!--INFO Right-->
<!--added on one column so the descriptions are displayed on one normal laptop screen-->
  <div class="col-md-7">
      <p> </p>
    <center><header><h2>OUR PILLARS</h2></header></center>  
    <center>
            <p id="justified">
                Σ - Society: Refers to the responsibility to serve the community in which one lives.<br>
                B - Brotherhood: The invincible bond that is shared between the members of the fraternity.<br>
                P - Remembrance: Respect and appreciation for one's own culture and those of others.
            </p>
        </center>  
  </div>
</section>

<section class="container-fluid">
    <div class="col-md-8 col-md-offset-2">
        <center>
            <p id="psmall">___________________________________________________________     </p>
            <p id="justified">
                Society, Brotherhood, and Remembrance: the three pillars of our distinguished fraternity. We, as brothers of 
                Sigma Beta Rho, strive to uphold these fundamental ideals throughout our everyday lives. Day in and Day out, 
                we endeavor to consistently model our organization according to the principles set forth by these pillars. 
            </p>
            <p id="justified">
                Sigma Beta Rho fosters the belief that individuals have a responsibility to the society to which we belong. 
                We understand that it is a privilege to be part of the University of Florida community and take advantage 
                of its several resources, and therefore it is our basic duty to give back to our campus and surrounding community.
            </p>
            <p id="justified">
                Although brotherhood is a necessary component of any fraternity, the brothers of Sigma Beta Rho take this concept 
                to new heights. We are able to forge an intimate relationship and connect on a personal level than larger 
                organizations because we like to keep our numbers relatively small. In addition to our strong intra-chapter 
                unity, our brotherhood extends beyond the campus of UF. We believe an integral aspect of maintaining national 
                and regional unity involves making regular road trips to other chapters. This bonding activity is by far one of 
                the favorite of our brothers. These frequent trips allow us to meet out-of-chapter brothers and form bonds with 
                them similar to the ones we share amongst our own chapter. Upon arrival to any of our other chapters, we can count 
                on being treated with the utmost hospitality, with brothers regularly sacrificing their own beds for our comfort 
                and always showing us a great time. A true brotherhood is one that involves more than fun and games. When someone 
                is in their time of need, those who step up to aid them can be called their true brothers.
            </p>
            <p id="justified">
                “You don’t know where you’re going unless you know where you came from.” This quote symbolizes the idea behind 
                our third pillar, Remembrance. To us, remembrance means keeping a constant reminder of those who came before 
                and the sacrifices they made. We practice our third pillar in several different ways, including an annual 
                Pi Chapter Alumni Weekend and a yearly winter formal. Both of these events are meant as a way for brothers 
                who crossed at the Pi Chapter as well as the rest of the region to reconnect. These reunions allow us to 
                learn more about our history and develop a relationship with alumni. The brothers of Sigma Beta Rho Pi Chapter 
                have worked tremendously hard to ensure the success of their organization. Their dedication to fulfilling the 
                three pillars of their fraternity is evident in every pursuit. 
            </p>
            <br>
            <h3>
                "SIGMA Society | BETA Brotherhood | RHO Remembrance <br>
                These pillars we live by, these pillars we die by"
            </h3>
            <br>
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