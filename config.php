<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $mysqli = new mysqli($db_host, $db_user, $db_password);
  if(!$mysqli){
    die("could not be reached").mysqli_connect_error();
  }
  $sql = "CREATE DATABASE johnBase2";
  if($mysqli->query($sql)){
    echo "created successfully";
  }else{
    echo "could not be created";
  }
  

  $mysqli->close();
?>