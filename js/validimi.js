function validateSignUp(){
    var passR = document.getElementById('password').value;
    var cpassR = document.getElementById('cpassword').value;
    var emlR = document.getElementById('email').value;
    var emri = document.getElementById('name').value;
    var phone = document.getElementById('mobile').value;
    var PhoneNumber = /^[0-9]+$/
    if (emri.length < 6) {
        alert('Please enter a valid name, longer than 6 characters');
        return false;
    }
    else if (emlR.includes(' ')) {
        alert('Please enter a vaid email');
        return false;
    }
    else if (!emlR.endsWith(".com")) {
        alert('please enter a valid email');
        return false;
    }
    else if (!emlR.includes('@')) {
        alert('please enter a valid email');
        return false;
    }
    else if(!PhoneNumber.test(phone)){
        alert('Please enter a valid phone number');
        return false;
    }
    else if (passR.length < 8 || passR === passR.toLowerCase() || passR === passR.toUpperCase() || !stringContainsNumber(passR)) {
        alert('Your password must be longer than 8 characters and contain lowercase and uppercase characters as well as at least one number!');
        return false;
    }
    else if (passR != cpassR) {
        alert('Please confirm your password correctly!');
        return false;
    }
    else{
        alert('You have registered succsesfully');
        return true;
    }
}
function stringContainsNumber(_input) {
    let string1 = String(_input);
    for (let i = 0; i < string1.length; i++) {
        if (parseInt(string1.charAt(i))) {
            return true;
        }
    }
    return false;
}

// function validateForm(){
//     var emailSign = document.getElementById('emaillog').value;
//     var passSign = document.getElementById('passwordlog').value;
//     if(emailSign!='email_provuese@gmail.com'||passSign!='CSEweb2021'){
//     alert("please check your email or password!");
//     }
//     else {
//     setTimeout(function(){window.location.reload();},10);
//     }
//     }
