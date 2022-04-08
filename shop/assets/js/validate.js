function ValidateForm() {

    var hasError = false;

    if (document.getElementById('first').value.search(/^[a-zA-Z]+$/) == -1) {
        document.getElementById('wrongfirst').style.display = "inline";
        hasError = true;
    } else {
        document.getElementById('wrongfirst').style.display = "none";   
    }



    if (document.getElementById('last').value.search(/^[a-zA-Z]+$/) == -1) {
        document.getElementById('wronglast').style.display = "inline";
        hasError = true;
    } else {
        document.getElementById('wronglast').style.display = "none";   
    }

    if (document.getElementById('ph').value.search(/^([0-9]{11})+$/) == -1) {
        document.getElementById('wrongph').style.display = "inline";
        hasError = true;
    } else {
        document.getElementById('wrongph').style.display = "none";   
    }


    if (document.getElementById('email').value.search(/^[a-zA-Z]+([_\.-]?[a-zA-Z0-9]+)*@[a-zA-Z0-9]+([\.-]?[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,4})+$/) == -1) {
        document.getElementById('wrongemail').style.display = "inline";
        hasError = true;
    } else {
        document.getElementById('wrongemail').style.display = "none";   
    }

    return !hasError;
}


document.getElementById('validate').onsubmit = ValidateForm;
