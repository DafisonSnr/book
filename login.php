  <?php
    require_once './includes/header.php';
?>
  
  <div class="container">
      
  <div id="loginpage" >
        <form action="" class="modal1-content animated">
            <div class="container">
                <span class="closeBtn" onclick="document.getElementById('modal1-display').style.display='none'"></span>
            </div>
            <div class="container">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter Username">
                <label for="password">Password</label>
                <input type="password" name="password"placeholder="Enter Password">
                <button class="login" type="submit">Login</button>
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
  <div class="container " >
  <button style="width: auto" onclick="document.getElementById('reg-modal').style.display='block'">Register</button>
  <div class="register" id="reg-modal">
      <?php require_once 'register.php'?>
  </div>
  </div>

  <script>
   
  </script>

  <?php require_once './includes/footer.php'?>