<?php
    require_once '../config1/config.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$sql = "INSERT INTO newUser(username,password,email) VALUES";
if($conn->query($sql)){
    echo "success";
}else{
    echo "error";
}

// if($stmt = mysqli_prepare($connect, "INSERT INTO newUser(username,password,email) values(?,?,?)")){
//     mysqli_stmt_bind_param($stmt,'sss', $user, $pass, $email);
//     mysqli_stmt_execute($stmt);
//     if(mysqli_affected_rows($connect)>0){
//         echo "success";
//     }else{
//         echo "error";
//     }
// }
?>