<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>
    .container{
        text-align: center;
    }
  
   .but{
       display: none;
       width: 180px;
       height: 30px;
       background-color: #ccc;
       position: relative;
   }
   .loader{
       border: 3px solid brown;
       border-top: 3px solid #ccc;
       border-radius: 100%;
       width: 20px;
       height: 20px;
       position: absolute;
       left: 20px;
       animation: spin 0.5s linear infinite;
       -webkit-animation: spin 0.5s linear infinite;
   }
   @keyframes spin {
    0%{transform: rotate(0deg)}
       100%{transform: rotate(360deg)}
   }
   @-webkit-keyframes spin{
       0%{transform: rotate(0deg)}
       100%{transform: rotate(360deg)}
   }

</style>
</head>
<body>
    
    <div class="container">
        <button id="trans" onclick="button()">Transfer</button>
        <button id="show-tran" class="but btn-sm btn"><span class="loader"></span> Processing.. <span id="n"></span></button>
        <span class="showForm"></span>
        <div id="form-show" class="form-container shadow-lg bg-light mx-auto ">    
            <form action="">
                <label for="">Enter COT Code</label>
                <input type="text" id="code" placeholder="Enter COT Code">
                <span id="code_er"></span>  
                <button type="submit" id="submit" class="btn btn-sm btn-danger">Continue</button>               
            </form>
        </div> 
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="./js/index.js"></script>
</body>
</html>