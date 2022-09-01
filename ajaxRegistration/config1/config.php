<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "swiftBank";
$conn = mysqli_connect($host, $user, $pass, $db) or die("database could not be reached");
$db = mysqli_select_db($conn, $db);


    // $sql = "CREATE DATABASE swiftBank";
    // if($conn->query($sql)){
    //     echo "Database created";
    // }else{
    //     echo "Failed to create Database";
    // }

// $sql = "CREATE TABLE tester(
//         id int(12) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         username varchar(500) not null,
//         password varchar(500) not null,
//         gender varchar(500) not null,
//         month varchar(500) not null,
//         year varchar(500) not null,
//         image varchar(500) not null,
//         reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
//     )";
// if($conn->query($sql)){
//     echo "Table created";
// }else{
//     echo "Fail to create";
// }
// $conn->close();
?>