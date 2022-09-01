<?php
 require_once './OOP/login.php';
if(isset($_POST['submit'])){
    $log = new login();
    $log->set_user($_POST['user']);
    echo $log->get_user();
}

   
?>