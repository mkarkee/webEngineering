var firstNameValid = true;
var lastNameValid = true;
var phoneNumberValid = true;

function validFirstName(el){
    var pattern = /[a-z]/ig;
    var str = el.value;

    var isValid = pattern.test(str);
    if(isValid){
        document.getElementById('firstNameError').innerHTML = "";
        firstNameValid = true;
    }
    else{
        document.getElementById('firstNameError').innerHTML = "Error: Enter a valid name.";
        firstNameValid = false;
    }
}

function validLastName(el){
    var pattern = /^[a-z]*$/ig;
    var str = el.value;

    var isValid = pattern.test(str);
    if(isValid){
        document.getElementById('lastNameError').innerHTML = "";
        lastNameValid = true;
    }
    else{
        document.getElementById('lastNameError').innerHTML = "Error: Enter a valid last name.";
        lastNameValid = false;
    }
}
function validPhoneNumber(el){
    var pattern = /^\d{3}[\-]\d{3}[\-]\d{4}$/;
    var str = el.value;

    var isValid = pattern.test(str);
    if(isValid){
        document.getElementById('phoneError').innerHTML = "";
        phoneNumberValid = true;
    }
    else{
        document.getElementById('phoneError').innerHTML = "Error: Phone number should be in the format: XXX-XXX-XXXX";
        phoneNumberValid = false;
    }

}




function validAll() {

    if(!phoneNumberValid) {
        document.getElementsByName('phone_number')[0].focus();
    }

    if(!lastNameValid) {
        document.getElementsByName('last_name')[0].focus();
    }

    if (!firstNameValid) {
        document.getElementsByName('first_name')[0].focus();
    }

    if(phoneNumberValid && lastNameValid && firstNameValid) {
        return true;
    }
    else {
        return false;
    }

}
