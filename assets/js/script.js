// open navigation documents
let navOpen = document.getElementById("nav-open");
let navDisplay = document.getElementById("nav-display");
let navClose = document.getElementById("nav-close");
let notice = document.getElementById("notice");
let mained = document.getElementById("main-display");


// search document

let searchOpen = document.getElementById("search-open");
let searchDisplay = document.getElementById("search-display");
let searchClose = document.getElementById("s-close");

//login documents
let loginBtn = document.getElementById("loginBtn");
let closeBtn = document.getElementById("login-close");
let loginDisplay = document.getElementById("login-display");


//navigation eventListener
navOpen.addEventListener('click', ()=>{
    if(searchDisplay.style.display == 'block' || loginDisplay.style.display == 'block'){
        document.body.classList.add("stop-scrolling");
        navDisplay.style.display = 'block';
        searchDisplay.style.display = 'none';
        searchOpen.style.visibility = 'visible';
        loginDisplay.style.display = 'none';
        loginBtn.style.visibility = 'visible';
        notice.style.opacity = '0.4';
        navOpen.style.visibility = 'hidden';
    }else{
        document.body.classList.add("stop-scrolling");
        navDisplay.style.display = 'block';
        notice.style.opacity = '0.4';
        navOpen.style.visibility = 'hidden';
    }
   
})
//navigation close eventListner
navClose.addEventListener('click', ()=>{
    document.body.classList.remove("stop-scrolling");
    document.getElementById("nav-display").style.display = 'none';
    notice.style.opacity = '1';
    navOpen.style.visibility = 'visible';
})

//open search EventListner
searchOpen.addEventListener('click', ()=>{
    if(navDisplay.style.display == 'block' || loginDisplay.style.display == 'block'){
        document.body.classList.add("stop-scrolling");
        loginDisplay.style.display = 'none';
        loginBtn.style.visibility = 'visible';
        navOpen.style.visibility = 'visible';
        navDisplay.style.display = 'none';
        searchDisplay.style.display = 'block';
        notice.style.opacity = '0.4';
        mained.style.opacity = '0.4';
    }else{
        document.body.classList.add("stop-scrolling");
        searchDisplay.style.display = 'block';
        notice.style.opacity = '0.4';
        mained.style.opacity = '0.4';
    }
})
//close search EventListner
searchClose.addEventListener('click', ()=>{
    document.body.classList.remove('stop-scrolling')
        searchDisplay.style.display = 'none'
        notice.style.opacity = '1';
        mained.style.opacity = '1';
})
function  body(){
 leftScroll = window.pageXOffset || window.documentElement.leftScroll;
 window.onscroll = function(){
     window.onsecuritypolicyviolation(leftScroll);
 }
}
//open login EventListner
loginBtn.addEventListener('click', ()=>{
//     TopScroll = window.pageYOffset || document.documentElement.scrollTop;
//     LeftScroll = window.pageXOffset || document.documentElement.scrollLeft,

// // if scroll happens, set it to the previous value
// window.onscroll = function() {
// window.scrollTo(LeftScroll, TopScroll);
//         };
    if(navDisplay.style.display == 'block' || searchDisplay.style.display == 'block' ){
        document.body.classList.add("stop-scrolling");
        navDisplay.style.display = 'none';
        searchDisplay.style.display = 'none';
        navOpen.style.visibility = 'visible';
        searchOpen.style.visibility = 'visible';
        loginBtn.style.visibility = 'hidden';
        document.getElementById('login-display').style.display = "block";
        notice.style.opacity = '0.4';
        mained.style.opacity = '0.4';
    }else{
        document.body.classList.add("stop-scrolling");
        loginBtn.style.visibility = 'hidden';
        document.getElementById('login-display').style.display = "block"; 
        notice.style.opacity = '0.4';
        mained.style.opacity = '0.4';
    }
    
})
//close login EventListner
closeBtn.addEventListener('click', ()=>{
    // window.onscroll = function() {};
    document.body.classList.remove("stop-scrolling"); 
    document.getElementById('login-display').style.display = "none";
    notice.style.opacity = '1';
    mained.style.opacity = '1';
    loginBtn.style.visibility = 'visible';
})


//account login switch
let busLink = document.getElementById("busin");
let perLink = document.getElementById("person");
let clickBus = document.getElementById("click-business");
let clickPer = document.getElementById("click-personal");
let perColor = document.getElementById("personal-color")
let busColor = document.getElementById("business-color");
let perUnderline = document.getElementById("personal-underline")
function personal(){ 
    if(busLink.style.display == 'block'){
        busLink.style.display = 'none';
        clickBus.style.border = "none"
        busColor.style.color = "black";
        perLink.style.display = 'block';
        clickPer.style.borderBottom = '2px solid orangered';;
        perColor.style.color = 'orangered';;
    }else{
        perLink.style.display = 'block';
        clickPer.style.borderBottom = '2px solid orangered';;
        perColor.style.color = 'orangered';;
    }
}
function business(){
    if(perLink.style.display === 'block' || perUnderline.style.display == 'block'){
        perUnderline.style.border = "none";
        clickPer.style.border = 'none';
        perColor.style.color = 'black';
        perLink.style.display = 'none';
        busLink.style.display = 'block';
        clickBus.style.borderBottom = '2px solid orangered';;
        busColor.style.color = 'orangered';;
    }else{
        busLink.style.display = 'block';
        clickBus.style.borderBottom = '2px solid orangered';;
        busColor.style.color = 'orangered';;   
    }
}

window.onclick = function(e){
    if(e.target == navDisplay){
        navDisplay.style.display = 'none';
    }
    if(e.target == searchDisplay){
        searchDisplay.style.display = 'none';
    }
}




