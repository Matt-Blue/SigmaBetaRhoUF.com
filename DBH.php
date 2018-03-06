<?php
    session_start();
    
    //change connection settings here
    //server name, username, password, database name
    $conn = mysqli_connect("localhost", "mbluestein88", "#Mattblue88", "mblueste_login");

    //TODO take out for production, leaves the site vulnerable to sql injection
    /*
    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }
    */
?>