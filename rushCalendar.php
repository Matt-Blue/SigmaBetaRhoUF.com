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
    
    <link href="calendar.css" rel="stylesheet" type="text/css">

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

<div class="container">

    <center><h2 id="padtop"><br>Calendar Based on Agenda Classes in calendar.css<br></h2></center>

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
                            <div class="dayofmonth">30</div>
                            <div class="dayofweek" id="large">Wednesday</div>
                            <div class="shortdate text-muted" id="medium">August, 2017</div>
                        </td>
                        <td class="agenda-time" id="large">
                            8:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                HOOP.
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Come HOOP. with the bros and get to know a little more about who we are outside of the classroom.
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">31</div>
                            <div class="dayofweek" id="large">Thursday</div>
                            <div class="shortdate text-muted" id="medium">August, 2017</div>
                        </td>
                        <td class="agenda-time" id="large">
                            8:30 PM
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                WORK.
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Join UF's finest as we lead a WORK. shop on resume building and career development. 
                                This event will be followed by an informational where food and drinks will be provided. 
                                <i>(All rushes must attend at least 1 informational)</i>
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">02</div>
                            <div class="dayofweek" id="large">Saturday</div>
                            <div class="shortdate text-muted" id="medium">September, 2017</div>
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-time" id="large">
                            Pi Paradise
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                GATORS.
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Tailgate with the brothers at Pi Paradise as we watch the GATORS. take on the Michigan Wolverines.
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">03</div>
                            <div class="dayofweek" id="large">Sunday</div>
                            <div class="shortdate text-muted" id="medium">September, 2017</div>
                        </td>
                        <td class="agenda-time" id="large">
                            2:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            SW 35th Place
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                SOCIETY.
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Help showcase our pillar of SOCIETY. as we perform our monthly road clean-ups. 
                                This will be followed by a brotherhood lunch you don't want to miss.
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">04</div>
                            <div class="dayofweek" id="large">Monday</div>
                            <div class="shortdate text-muted" id="medium">September, 2017</div>
                        </td>
                        <td class="agenda-time" id="large">
                            2:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            Pi Paradise
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                BROTHERHOOD.
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Celebrate Labor Day with us as we host a BROTHERHOOD. BBQ.
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">05</div>
                            <div class="dayofweek" id="large">Tuesday</div>
                            <div class="shortdate text-muted" id="medium">September, 2017</div>
                        </td>
                        <td class="agenda-time" id="large">
                            8:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            TBA
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                STRESS.
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Do you ever get stressed out during the school year? Join us for a STRESS. management workshop where we will 
                                discuss useful tactics to get through a hard semester. 
                                This event will be followed by an informational where food and drinks will be provided.
                                <i>(All rushes must attend at least 1 informational)</i>
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">06</div>
                            <div class="dayofweek" id="large">Wednesday</div>
                            <div class="shortdate text-muted" id="medium">September, 2017</div>
                        </td>
                        <td class="agenda-time" id="large">
                            8:30 PM
                        </td>
                        <td class="agenda-time" id="large">
                            Pi Paradise
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                POKER.
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                Kick it with the cobras and play some POKER., 2k, Rocket League and other games at Pi Paradise.
                            </div>
                        </td>
                    </tr>

                    <!-- Single event in a single day -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">09</div>
                            <div class="dayofweek" id="large">Saturday</div>
                            <div class="shortdate text-muted" id="medium">September, 2017</div>
                        </td>
                        <td class="agenda-time" id="large">
                            5:00 PM
                        </td>
                        <td class="agenda-time" id="large">
                            n/a
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                APPLICATIONS.
                            </div>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event" id="large">
                                APPLICATIONS ARE DUE AT 5PM ON SATURDAY SEPTEMBER 9TH. 
                                <i>(Rushes must attend 1 informational and 2 events in order to apply.)</i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>

<!-- footer -->
<section class="container-fluid">
    <center>
        <footer class="col-md-12">
          <div id="smaller">Made by Matthew Bluestein</div>
          <br>
        </footer>
    </center>
</section>
    
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>