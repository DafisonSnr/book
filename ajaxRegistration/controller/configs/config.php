<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "swiftBank";
$connect = new mysqli($host, $user, $pass, $db);
if(mysqli_connect_error($connect)){
    die("Database Could not be reaached").mysqli_connect_error();
}


// $sql = "CREATE TABLE testered(
//     id int(12) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     username varchar(500) not null,
//     password varchar(500) not null,
//     gender varchar(500) not null,
//     month varchar(500) not null,
//     year varchar(500) not null,
//     image varchar(500) not null,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";
// if($connect->query($sql)){
// echo "Table created";
// }else{
// echo "Fail to create";
// }

    // $sql = "CREATE DATABASE swiftBank";
    // if($conn->query($sql)){
    //     echo "Database created";
    // }else{
    //     echo "Failed to create Database";
    // }

// $sql = "CREATE TABLE users(
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