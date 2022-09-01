function userInfo(str){
    if(str == ''){
        document.getElementById("txtHint").innerHTML = '';
    }else{
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlHttp.open("GET", "users.php?q="+str, true);
        xmlHttp.send();
    }
}

var reg = document.getElementById('reg-modal');
   
window.onclick = function(event) {
if (event.target == reg) {
    reg.style.display = "none";
}
}
alert("working worker")