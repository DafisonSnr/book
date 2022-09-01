<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "swiftBank";
$connect = new mysqli($host, $user, $pass,$db);
if(mysqli_connect_error($connect)){
    die("database could not be readched").mysqli_connect_error();
}else{
    echo "connected";
}


$code = $_POST['code1'];
    
    $sql =  "INSERT INTO cot(code) values('$code')";
    $result = mysqli_query($connect,$sql);
    if($result){
        echo "success";
    }else{
        echo "error";
    }
 
?>