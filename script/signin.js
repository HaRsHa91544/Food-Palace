const s = document.getElementById("password");
function func(){
    if(s.type==="password"){
        s.type="text";
    }
    else{
        s.type="password";
    }
}