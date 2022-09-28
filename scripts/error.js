var emailError = document.getElementById('emailText');


function validateEmail(){
    var email = document.getElementById('email').value;

    if(email.length == 0){
        emailError.innerHTML = 'Email is requiered'
        return false;
    }

    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,3}$/)){
        emailError.innerHTML = 'Email invalid'
        return false;
    }

    
    emailError.innerHTML = '';
   
    return true;
   


}

