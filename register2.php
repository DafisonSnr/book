<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/cerulean/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <title>Document</title>
</head>
<body>
   
<div class="container">
    <div class="row">
        <div class="shadow-lg bg-light mx-auto mt-5 p-5 w-50">
            <h1 class="text-center text-info">Registeration Page</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="profile-pic">
                <span><?echo $file_er?></span>
                <br>
                <input type="text" name="fullname" placeholder="FullName" class="form-control form-control-sm">
                <br>
                <input type="password" name="pword" placeholder="Enter Password" class="form-control form-control-sm">
                <br>
                <input type="password" name="cofpword" placeholder="Confirm Password" class="form-control form-control-sm">
                <br>
                <input type="email" name="email" placeholder="Enter Email" class="form-control form-control-sm">
                <br>
                <span>Female</span><input type="radio" name="gender">
               <span>Male</span> <input type="radio" name="gender">
                <span>Other</span><input type="radio" name="gender">
                <br>
                <select name="month" id="month">
                    <option value="" selectdd>Month</option>
                    <?php 
                        $month = array('Jan', 'Feb', 'Mar');
                        for($m = 0;$m<count($month); $m++){?>
                            <option value="<?=$month[$m]?>"><?=$month[$m]?></option>
                      <?php  }                    
                    ?>
                </select>
                <select name="year" id="year">
                    <option value="" selected>Year</option>
                    <?php for($y = 1980;$y<=2050; $y++){?>
                        
                        <option value="<?=$y?>"><?=$y?></option>
                   <?php }?>
                </select>
                <br>
                <div class="container d-flex">
                    <div class="col-lg-4">
                        <span name="submit" onclick="sbtReg()" class="btn btn-sm btn-danger p-3 w-100 mt-3">Register</span>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <a class="btn btn-sm btn-primary p-3 w-100 mt-3">Cancel</a>
                    </div>
                </div>
            </form>
            <script>

/*--------------------------

Submit Registration

---------------------------- */

function sbtReg(){



  let profile_pic = $("input[name=profile-pic]").val();

  let fullname = $("input[name=fullname]").val();

  let pword = $("input[name=pword]").val();

  let cofpword = $("input[name=cofpword]").val();
  
  let email = $("input[name=email]").val();

  let gender = $("input[name='gender']:checked").val();
  
 let month = $("#month").val();
 
 let year = $("#year").val();
 
 
  
  





  if( profile_pic == "" || profile_pic == null ){ Swal.fire("Please Upload a Picture"); return; }

  if( fullname == "" || fullname == null ){ Swal.fire("Please Fill your fullname"); return; }

  if( pword == "" || pword == null ){ Swal.fire("Please Fill in your password"); return; }  

  if( cofpword == "" || cofpword == null ){ Swal.fire("Please confirm your password"); return; }
  
  if( pword != cofpword ){ Swal.fire("Both Passwords Should Match Please"); return; }  
  
  if( email == "" || email == null ){ Swal.fire("Please fill in your email address"); return; }

  if( gender == "" || gender == null ){ Swal.fire("Please select your gender"); return; } 

  if( month == "" || month == null ){ Swal.fire("Please select your month"); return; } 

  if( year == "" || year == null ){ Swal.fire("Please select your year"); return; }

  


     



    let form = $('form')[0]; // You need to use standard javascript object here

    let formData = new FormData(form);      
    console.log(formData);


    $.ajax({

        url: 'register2.php',

        data: formData,

        type: 'POST',

        contentType: false, 

        processData: false,

        success : function(data){

         

          if( data == "success" ){
 

       

          }                 
          else {
              
              
          }            

        }

    })



}


</script>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>