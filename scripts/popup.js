document.querySelector("#show-login").addEventListener("click",function(){

    document.querySelector(".popup").classList.add("active");

});


document.querySelector(".popup .close-btn").addEventListener("click",function(){

    document.querySelector(".popup").classList.remove("active");

});


document.querySelector("#show-signup").addEventListener("click",function(){

    document.querySelector(".popup2").classList.add("active");

});


function togglePW(){
    var password = document.querySelector('[name=password]');
    
    if(password.getAttribute('type')=='password'){
        password.setAttribute('type','text');
        document.getElementById("font").style.color='yellowgreen';

    }else
    {
        password.setAttribute('type','password');
        document.getElementById("font").style.color='#888';
    }
}


