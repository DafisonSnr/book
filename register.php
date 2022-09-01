<?php 

require_once './includes/header.php';
require_once './action.php';

?>

   
<div class="container" id="reg-modal" >
    <div class="row" class="reg-modal" >
        <div class="shadow-lg bg-white mx-auto mt-5 p-5 reg-modal-con reg-animate">
            <div class="closeBtn">
                <span onclick="document.getElementById('reg-modal').style.display = 'none'">&times</span>
            </div>
            <h1 class="text-center text-info">Registeration</h1>
            <span class="text-danger d-block"><?php echo $status ?></span>
            <form action="" method="POST" enctype="multipart/form-data" >
                <input type="file" name="fileUpload">
                <span class="d-block text-danger" id="fileUpload" ><?php echo $file_er?></span>
                <br>
                <input type="text" name="fname" placeholder="FullName" class="form-control form-control-sm"  value="<?php echo $name?>">
                <span class="d-block text-danger" id="fulname"><?php echo $name_er?></span>
                <br>
                <input type="text" name="username" id="" placeholder="Enter Username" class="form-control form-control-sm" value="<?php echo $user?>">
                <span class="d-block text-danger"><?=$user_er?></span>
                <br>
                <input type="password" name="password" id="pasw" placeholder="Enter Password" pattern="(?=.*/d)(?=.*[A-Z])(?=.*[0-9])(?=.*[?@#$&!+])(?=.*[a-z].{8,}" class="form-control form-control-sm">
                <div class="container" id="messaged">
                    <h3>Password must contain the follow:</h3>
                    <p class="invalid" id="upper">Password must contain <b> one Uppercase letter or more</b></p>
                    <p class="invalid" id="number">Password must contain <b>one digit or more</b></p>
                    <p class="invalid" id="charact">Password must contain one <b>special Character</b> </p>
                    <p class="invalid" id="leng">Password must must be <b>8 digit or above</b> </p>
                    <p class="invalid" id="lower">Password must contain <b>one lower letter or more</b> </p>
                </div>
                <span class="d-block text-danger"><?=$pass_er?></span>
                <br>
                <input type="password" name="confirm" placeholder="Confirm Password" class="form-control form-control-sm">
                <span class="d-block text-danger"><?=$conf_er?></span>
                <br>
                <input type="text" name="email" placeholder="Enter Email" class="form-control form-control-sm">
                <span class="d-block text-danger"><?=$email_er?></span>
                <br>
                <div class="gender">
                <span>Female</span><input type="radio" name="gender" <?php if(isset($gend) && $gend == "Female") echo "checked";?> value="Female">
               <span>Male</span> <input type="radio" name="gender" <?php if(isset($gend) && $gend == "Male") echo "checked";?> value="Male">
                <span>Other</span><input type="radio" name="gender"<?php if(isset($gend) && $gend == "Other") echo "checked";?> value="Other">
                <span class="d-block text-danger"><?=$gend_er?></span>
                </div>
                <br>
                <select name="month" id="">
                    <option value="" selected>Month</option>
                    <?php 
                        $month = array('Jan', 'Feb', 'Mar');
                        for($m = 0;$m<count($month); $m++){?>
                            <option value="<?=$month[$m]?>"><?=$month[$m]?></option>
                      <?php  }                    
                    ?>
                </select>
                <select name="year" id="">
                    <option value="" selected>Year</option>
                    <?php for($y = 1980;$y<=2050; $y++){?>
                        <option value="<?=$y?>"><?=$y?></option>
                   <?php }?>
                </select>
                <br>
                <span class="d-block text-danger"><?php echo $dob_er?></span>
                <div class="container ">
                    <div class="col-lg-4">
                        <button type="submit"  name="register" class="btn btn-sm btn-danger p-3 w-100 mt-3">Register</button>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <a href="#"  class="btn btn-sm btn-primary p-3 w-100 mt-3">Cancel</a>
                    </div>
                </div>  
            </form>
        </div>
    </div>
</div>
<div class="container">
        <button style="width:auto" onclick="document.getElementById('modal1-display').style.display='block'">Login</button>
    </div>
    <div class="modal1" id="modal1-display">
        <form action="" class="modal1-content animated" method="post" enctype="multipart/form-data">
            <div class="container">
                <span class="closeBtn" onclick="document.getElementById('modal1-display').style.display='none'">&times</span>
            </div>
            <div class="container">
                <label for="username">Username</label>
                <input type="text" name="username2" placeholder="Enter Username">
                <label for="password">Password</label>
                <input  type="password" name="password2" id="psw" placeholder="Enter Password">
                <input type="checkbox" name="" onclick="showPass()" id="">
                <button class="login" type="submit" name="login">Login</button>
                <label for="">
                    <input type="checkbox" name="" checked="checked" id="">Remember me
                </label>
            </div>
            <div class="container">
                <button style="width:auto" class="cancelBtn" onclick="document.getElementById('modal-display').style.display='none'">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a> </span>
            </div>
        </form>
    </div>

    

    
<script>
    let passInput = document.getElementById("pasw");
let upper = document.getElementById("upper");
let lower = document.getElementById("lower");
let number = document.getElementById("number");
let leng = document.getElementById("leng");
let specChar = document.getElementById("charact");

passInput.onfocus = function() {
    document.getElementById("messaged").style.display = "block";
}
passInput.onblur = function(){
    document.getElementById("messaged").style.display = "none";
}
$('messagae')

passInput.onkeyup = function() {
    let uperCase = /[A-Z]/g;
    if(passInput.value.match(uperCase)){
        upper.classList.remove("invalid");
        upper.classList.add("valid")
    }else{
        upper.classList.add("invalid");
        upper.classList.remove("valid")
    }
    let digit = /[0-9]/g;
    if(passInput.value.match(digit)){
        number.classList.remove("invalid");
        number.classList.add("valid")
    }else{
        number.classList.add("invalid");
        number.classList.remove("valid")
    }
    let char = /[@#$%&!+?]/g;
    if(passInput.value.match(char)){
        specChar.classList.remove("invalid");
        specChar.classList.add("valid")
    }else{
        specChar.classList.add("invalid");
        specChar.classList.remove("valid")
    }
    let lowerChar = /[a-z]/g;
    if(passInput.value.match(lowerChar)){
        lower.classList.remove("invalid");
        lower.classList.add("valid")
    }else{
        lower.classList.add("invalid");
        lower.classList.remove("valid")
    }
    if(passInput.value.length >= 8){
        leng.classList.remove("invalid");
        leng.classList.add("valid");
    }else{
        leng.classList.remove("valid");
        leng.classList.add("invalid");
    }
}

let modal1 = document.getElementById("modal1-display");
window.onclick = function(event){
    if(event.target == modal1){
        modal1.style.display="none";
    }
}
let pInput = document.getElementById("psw");
function showPass(){
    if(pInput.type === "password"){
        pInput.type = "text"
    }else{
        pInput.type = "password";
    }

}

// let showWid = document.getElementById("showed");
// showWid.onmouseover = function(){
//     showWid.style = ""
//     showWid.style.width = '50%';
// }
// showWid.onmouseout = function(){
//     document.getElementById("showed").style.width = '50px';
// }
</script>
<?php require_once './includes/footer.php'?>