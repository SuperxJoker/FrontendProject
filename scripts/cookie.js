let popUp = document.getElementById("cookiePopup");

document.getElementById("acceptCookie");


window.addEventListener("load",function(){
   
    showPopup();
});

function showPopup(){

   
    const timeLimit = 10; //seconds
    let i = 0;
    const timer = setInterval(function(){
        i++;
        if(i == timeLimit){
            clearInterval(timer);
            popUp.classList.add("show");
        }
        console.log(i);
    },1000);
}

addEventListener("click", () => {

    let d = new Date();
    
    d.setMinutes(2+ d.getMinutes());


    document.cookie = "myCookieName=thisIsMyCookie";

    popUp.classList.add("hide");
    popUp.classList.remove("show");


});

const checkCookie = () => {

    let input = document.cookie.split("=");

    if(input[0]== "myCookieName"){

        popUp.classList.add("hide");
        popUp.classList.remove("show");


    }
    else{

        popUp.classList.add("show");
        popUp.classList.remove("hide");
    }
};