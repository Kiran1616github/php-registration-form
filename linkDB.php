<?php
//conect mysql to phpmyadmin database
$hostname = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'webdesign';
$linkDB = mysqli_connect($hostname, $user, $pass, $dbname);  
  if (mysqli_connect_error()){ 
  die ('There was an error while connecting to database');
  } else {
    echo "successfully connected to database";
  }
    ?>