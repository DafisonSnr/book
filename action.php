<?php
    require_once './config/config.php';
    function clean($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $user = $pass = $gend = $month = $year = $email = $confirm = $name = '';
    $user_er = $pass_er = $gend_er = $dob_er = $conf_er = $name_er = $file_er = '';
    $status = '';
    if(isset($_POST['register'])){
        $sql = mysqli_query($conn, "select username from users");
        if(empty($_POST['username'])){
            $user_er = "This Field is required";
        }elseif(mysqli_num_rows($sql)>0){
            $user_er = "Username Aready in use!";
        }else{
            $user = clean($_POST['username']);
        }
        if(empty($_POST['fname'])){
            $name_er = "This field is required";
        }else{
            $name = clean($_POST['fname']);
        }  
        if(empty($_POST['password'])){
            $pass_er = "Password field is required";
        }else{
            $pass = clean($_POST['password']);
            $uppercase = preg_match('@[A-Z]@', $pass);
            $lowercase = preg_match('@[a-z]@', $pass);
            $number    = preg_match('@[0-9]@', $pass);
            $specialChars = preg_match('@[^\w]@', $pass);
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
                $pass_er = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            }else{
                $pass_er = "strong";
                $password = password_hash($pass, PASSWORD_DEFAULT);
            }
        }
        if(empty($_POST['confirm'])){
            $conf_er = "Password field is required";
        }elseif($_POST['confirm'] != $_POST['password']){
            $conf_er = "Passwords do not match";
        }else{
            $confirm = clean($_POST['confirm']);
        }
        if(empty($_POST['email'])){
            $email_er = "Email field is required";
        }else{
            $email = clean($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_er = "Invalid Email Address";
            }
        }
        if(empty($_POST['gender'])){
            $gend_er = "Check gender box";
        }else{
            $gend = clean($_POST['gender']);
        }
        if(empty($_POST['month'])){
            $dob_er = "This field is required";
        }else{
            $month = clean($_POST['month']);
        }
        if(empty($_POST['year'])){
            $dob_er = "This field is required";
        }else{
            $year = clean($_POST['year']);
        }

        $uploads = "upload/";
        $target_dir = $uploads. basename($_FILES['fileUpload']['name']);
        $uploadOk = 1;
        $imageDir = strtolower(pathinfo($target_dir, PATHINFO_EXTENSION));

        if($_FILES['fileUpload']['size']>5000000){
            $file_er = "Image is to large";
            $uploadOk = 0;
        }
        if(isset($_POST['register'])){
            $check = getimagesize($_FILES['fileUpload']['tmp_name']);
            if($check !== false){
                $check['mime'].".";
                $uploadOk = 1;
            }else{
                $file_er = "Invalid Image";
                $uploadOk = 0;
            }
        }
        if($imageDir != "JPG" && $imageDir != "png" && $imageDir != "jpeg" && $imageDir != "jpg"){
            $file_er = "File not supported";
            $uploadOk = 0;
        }
        if(file_exists($target_dir)){
            $file_er = "File aready in use";
            $uploadOk = 0;
        }
        if($uploadOk == 0){
            $file_er = "File did not upload successfully";
        }
        if(empty($user_er) && empty($pass_er) && empty($gend_er) && empty($dob_er) && empty($conf_er) && empty($name_er) && empty($file_er)){
            if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_dir)){
                
                // //$sql = "insert into users(username,password,gender,month,year,email,image) values('$user','$password','$gend','$month','$year','$email','$target_dir')";
                // if($conn->query($sql)){
                //     $status = "You info has been successfully registered";
                // }else{
                //     $status = "Fail to register";
                // }
                    $sql = "insert into users(username,password,gender,month,year,email,image) values(?,?,?,?,?,?,?)";
                if($stmt=mysqli_prepare($conn,$sql)){
                    mysqli_stmt_bind_param($stmt,'sssssss',$user,$password,$gend,$month,$year,$email,$target_dir);
                    mysqli_stmt_execute($stmt);
                    //number is i, string is s, decimal is d//
                    $result = mysqli_stmt_get_result($stmt);
                    if(mysqli_affected_rows($conn)>0){
                        $status = "Registration successful";
                    }
                }
            }else{
                $status = "Faile to upload";
            }
        }
    }   
 


    $user2 = $pass2 = '';
    $user2_er = $pass2_er = '';
    if(isset($_POST['login'])){
        if(empty($_POST['username2'])){
            $user2_er = "This Field is required";
        }else{
            $user2 = clean($_POST['username2']);
        }
        if(empty($_POST['password2'])){
            $pass2_er = "This Field is required";
        }else{
            $pass2 = clean($_POST['password2']);
        }
        if(empty($user2_er) && empty($pass2_er)){
            $sql = "select * from users where username='$user2'";
            $check = $conn->query($sql);
            if(mysqli_num_rows($check)>0){
                $passCheck = mysqli_fetch_assoc($check);
                $password = $passCheck['password'];
                if(password_verify($pass2, $password)){
                    echo "<script>alert('Login successful');window.location.href='demo_test.php'</script>";
                }else{
                    echo "Invalid Password";
                }

            }else{
                echo "Invalid User";
            }     
        }
    }
?>

<?php require_once './includes/footer.php'?>