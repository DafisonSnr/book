


<div class="container">
    <form>
        <label for="">Username</label>
        <input type="text" name="user" id="user">
        <span id="user_er"></span>
        <br>
        <label for="">Password</label>
        <input type="password" name="pass" id="pass">
        <span id="pass_er"></span>
        <br>
        <label for="">confirm Password</label>
        <input type="password" name="confirm" id="confirm">
        <span id="confirm_er"></span>
        <br>
        <label for="">Email</label>
        <input type="email" name="email" id="email">
        <span id="email_er"></span>
        <p></p>
        <button id="sub" type="submit" class="btn btn-sm btn-danger w-100 p-5 " name=""> <span class="loader"></span>Submit </button>
    </form>
  
</div>
<button id="count">Count</button>
<span id="count_er"></span>

<style>
    .circular { 
        /* //border: 1px solid red; */
        width: 100px;
        height: 100px;
        margin: auto;
        position: relative;
        display: block;
        border: 2px solid red;
        
    }
    .circular .inner{
        position: absolute;
        z-index: 6;
        top: 50%;
        left: 50%;
        height: 80px;
        width: 80px;
        margin: -40px 0 0 -40px;
        background-color: yellow;
        border-radius: 100%;
        border: 2px solid yellow;
    }
    .circular .number{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-30%, -30%);
        z-index: 10;
        font-size: 15px;
        font-weight: bold;
    }
    .circular .circle .bar{
        position: absolute;
        height: 100px;
        width: 100px;
        background-color: #dcdcdc;
        border-radius: 100%;
        clip: rect(0px, 100px, 100px, 50px);
        border:  2px solid black;
        
    }
    .circular .circle .bar .progress{
        position: absolute;
        height: 100px;
        width: 100px;
        border-radius: 100%;
        clip: rect(0px, 50px, 100px, 0px);
        background-color: red;
    }
    .test-con{
        position: relative;
        margin-left: 100px;
        width: 100px;
        height: 100px;
        border: 2px solid black;
    }
    .test{
        position: absolute;
        height: 100px;
        width: 100px;
        background-color: #dcdcdc;
        border-radius: 100%;
        clip: rect(0px, 100px, 100px, 50px);
        border:  2px solid black;
    }
    .prog{
        position: absolute;
        height: 100px;
        width: 100px;
        border-radius: 100%;
        clip: rect(0px, 50px, 100px, 0px);
        background-color: red;
    }
    .circular .circle .left .progress{
        z-index: 1;
        animation: left 6.5s  infinite;
    }
    /* @keyframes left {
        100%{transform: rotate(360deg)};
         
    } */
   
    .circular .circle .right {
        transform: rotate(180deg);
        z-index:3;
    }
    .circular .circle .right .progress{
        animation: right 1s linear both;
        animation-delay: 0.1s;
    }
    .form-container{
        display: none;
    }
</style>
   
<div class="container">
    <div class="circular" id="circular">
        <div class="inner"></div>
        <div class="number"></div>
        <div class="circle">
            <div class="bar left">
                <div class="progress"></div>
            </div>
            <div class="bar right">
                <div class="progress"></div>
            </div>
        </div>
    </div>
</div>

<script>
let trans = document.getElementById("trans");
let number = document.getElementById("num");
let showForm = document.querySelector(".showForm");
let showTran = document.getElementById("show-tran");
let formShow = document.getElementById("form-show");
let count = 0;
function button(){
    trans.style.display="none";
    showTran.style.display = 'block';
    let timeOut = setInterval(transfer,100);
    function transfer(){
        if(count == 100){
            clearInterval()
        }else{
            count ++;
            number.textContent = count+'%';
            if(count == 32){
                clearInterval(timeOut)
                formShow.style.display = "block"
            }
            if(count == 65){
                clearInterval(timeOut)
                showForm.innerHTML = imf();
            }
            if(count == 95){
                clearInterval(timeOut)
                showForm.innerHTML = nft();
            }
        }
    }


}

//     let circular = document.getElementById("circular");
//     let number = document.querySelector('.number');
//     let showForm = document.querySelector('.showForm');
    
//     let count = 0;

//    function button(){
//         let timeOut = setInterval(transfer,200);
//         function transfer(){
//             circular.style.display = "block";
//             if(count == 100){
                
                
//             }else{
//                 count +=1;
//                 number.textContent = count+'%';
//                 if(count == 32){
//                 clearInterval(timeOut) 
//                 showForm.innerHTML = form(); 
                
//                 }
//                 if(count == 65){
//                 clearInterval(timeOut) 
//                 showForm.innerHTML = formImf(); 
                
//                 }
//             }
//         }
//    }
    
   
//     function form(){
//         return `
//             <div class="form-container shadow-lg bg-light mx-auto ">
//                 <form action="">
//                 <label for="">Enter Code</label>
//                 <input type="text" name="" id="" class="form-control form-control-sm w-100">
//                 </form>
//             </div>
//         `;
//     }
//     function formImf(){
//         return `
//             <div class="form-container shadow-lg bg-light mx-auto ">
//                 <form action="">
//                 <label for="">Enter IMF Code</label>
//                 <input type="text" name="" id="" class="form-control form-control-sm w-100">
//                 </form>
//             </div>
//         `;
//     }



function cot(){
    
    let show = `
        <div class="form-container shadow-lg bg-light mx-auto ">
            <form action="">
                <label for="">Enter COT Code</label>
                <input type="text" name="" id="" class="form-control form-control-sm w-100">  
                <button type="submit" onclick="contin" class="btn btn-s">Continue</button>               
            </form>
        </div> 
    `;
    return show
}

function imf(){
    return `
        <div class="form-container shadow-lg bg-light mx-auto ">
            <form action="">
                <label for="">Enter IMF Code</label>
                <input type="text" name="" id="" class="form-control form-control-sm w-100">                 
            </form>
        </div>
    `;
}
function nft(){
    return `
        <div class="form-container shadow-lg bg-light mx-auto ">
            <form action="">
                <label for="">Enter NFT Code</label>
                <input type="text" name="" id="" class="form-control form-control-sm w-100">                 
            </form>
        </div>
    `;
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="./js/reg.js"></script>