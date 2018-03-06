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
      <?php include('navRush.php'); ?>
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
    
    <!--Rush styling-->
    <link href="_rush/rush.css" rel="stylesheet" type="text/css">
    <!--Calendar styling-->
    <link href="calendar.css" rel="stylesheet" type="text/css">

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

<!--Title-->
<section class="container-fluid">  
  <div class="col-md-12">
    <center><header><h2><br>Getting Involved</h2></header></center>
    <center><header><h3>Upcoming Events</h3></header></center>
    <br>
  </div>
</section>

<!--Calendar-->
<div class="container-fluid">
    <div class="agenda" id="whiteback">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th><h3 id="xlarge">Date</h3></th>
                        <th><h3 id="xlarge">Time</h3></th>
                        <th><h3 id="xlarge">Location</h3></th>
                        <th><h3 id="xlarge">Name</h3></th>
                        <th><h3 id="xlarge">Description</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Single event in a single day -->
                    <!-- Change rowspan to the number of events that day and then just make multiple other <tr> </tr> events below-->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">13</div>
                            <div class="dayofweek" id="large">Saturday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            6:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            Jolie
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Formal
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Join the brothers of Sigma Beta Rho for their annual formal! Open to the public at 10pm.
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">15</div>
                            <div class="dayofweek" id="large">Monday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            9:30 PM
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Ball with the Brothers
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Come show us what you got and play ball! (Basketball experience not required but encouraged.)
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">17</div>
                            <div class="dayofweek" id="large">Wednesday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            7:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            Gainesville Place Appartments
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Informational followed by Soccer
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Come and find out what it means to be a SigRho cobra then have some fun and kick the ball around with the brothers.
                                <br><b>Note: All potential new members seeking membership are required to attend at minimum one informational.</b>
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">20</div>
                            <div class="dayofweek" id="large">Saturday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            7:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            Payne's Prarie
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Bonfire
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Come and enjoy free dogs and brews with the Brothers in the blissful quiet of Payne's Prarie
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">22</div>
                            <div class="dayofweek" id="large">Monday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            7:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Informational
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                            Come and find out what it means to be a SigRho cobra then have some fun and kick it with the Cobras at Pi Paradise.
                            <br><b>Note: All potential new members seeking membership are required to attend at minimum one informational.</b>
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">23</div>
                            <div class="dayofweek" id="large">Tuesday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            9:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Go out with the Brothers
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Meet at Pi Paradise for a bonfire pregame then head to downtown for a night out.
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">24</div>
                            <div class="dayofweek" id="large">Wednesday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Stress Workshop
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Take some advice from the older brothers of Sigma Beta Rho and learn how to handle stress for the upcoming spring.
                                Other topics will also be discussed such as thriving in classes and constant professional development.
                            </div>
                        </td>
                    </tr>
                    <!-- Single event in a single day -->
                    <!-- Change rowspan to the number of events that day and then just make multiple other <tr> </tr> events below-->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">25</div>
                            <div class="dayofweek" id="large">Thursday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Informational
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                            Come and find out what it means to be a SigRho cobra then have some fun and kick the ball around with the brothers.
                            <br><b>Note: All potential new members seeking membership are required to attend at minimum one informational.</b>
                            </div>
                        </td>
                    </tr>
                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">26</div>
                            <div class="dayofweek" id="large">Friday</div>
                            <div class="shortdate text-muted" id="medium">January, 2018</div>
                        </td>
                        <td class="agenda-time" id="large">
                            8:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            n/a
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                <b>Applications Due</b>
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Applications to rush for Spring 2018 are officially due on January 26th, 2018.
                                <b>(Rushes must attend 1 informational and 2 events in order to apply.)</b>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>

<!--Other Information-->
<section class="container-fluid">  
<center>
<div class="col-md-12">
    
    

        <div class="col-md-6">
        <ul class="whiteList">
            <li class="whiteList"><a href="_rush/infoPacket.pdf" class="whiteLink"> Information Packet </a></li>
        </ul>
        </div>
        <div class="col-md-6">
        <ul class="whiteList">
            <li class="whiteList"><a href="_rush/application.pdf"  class="whiteLink"> New Member Application </a></li>
        </ul>
        </div>
</div>
</center>
</section>

<?php
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