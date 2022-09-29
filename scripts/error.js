var emailError = document.getElementById('emailText');
var passError = document.getElementById('passwordText');


function validateEmail(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if(email.length == 0){
        emailError.innerHTML = 'Email is requiered'
        return false;
    }

    if(password.length == 0){
        passError.innerHTML = 'Password is requiered'
        return false;
    }

    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,3}$/)){
        emailError.innerHTML = 'Email invalid'
        return false;
    }

    if(!password.match(/[0-9]/)){
        passError.innerHTML = 'Number is required '
        return false;
    }

    if(!password.match(/[A-Z]/)){
        passError.innerHTML = 'Upper case letter required'
        return false;
    }

    if(!password.match(/[a-z]/))
    {
        passError.innerHTML = 'Lower case letter required'
        return false;
    }

    if(!password.match(/[!\@\#\$\%\^\&\*\(\)\-\=\_\+\?\<\>\,\.\[\]\;\~]/)){
        passError.innerHTML = 'Special character required'
        return false;
    }

    if(password.length < 6 ){
        passError.innerHTML = 'Password should have at least 6 characters'
        return false;
    }

    
    emailError.innerHTML = 'Good';
    emailError.style.color = 'yellowgreen';
    passError.innerHTML = 'Good';
    passError.style.color = 'yellowgreen';
   
    return true;
   


}

