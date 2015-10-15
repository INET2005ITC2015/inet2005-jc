var nameReg = /(^[A-Z]{1})[a-z]+/;
var nameCheck = new RegExp(nameReg);

var dateReg = /[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/;
var dateCheck = new RegExp(dateReg);

var genderReg  = /^[M|F]$/;
var genderCheck = new RegExp(genderReg);

function checkForm() {

    var fName = document.getElementById("firstName").value;
    var lName = document.getElementById("lastName").value;
    var hDate = document.getElementById("hireDate").value;
    var bDate = document.getElementById("birthDate").value;
    var gender = document.getElementById('gender').value;

    if (nameCheck.exec(fName) == null) {
        //event.preventDefault();
        document.getElementById("firstName").style.borderColor = "red";
        document.getElementById("Warning").innerHTML = "Please enter proper first name.";
        document.getElementById("Warning").style.color = "red";
        return false;
    }
    else if (nameCheck.exec(lName) == null) {
        //event.preventDefault();
        document.getElementById("lastName").style.borderColor = "red";
        document.getElementById("Warning2").innerHTML = "Please enter proper first name.";
        document.getElementById("Warning2").style.color = "red";
        return false;
    }
    else if (dateCheck.exec(bDate) == null) {
        //event.preventDefault();
        document.getElementById("birthDate").style.borderColor = "red";
        document.getElementById("Warning3").innerHTML = "Please enter proper date.";
        document.getElementById("Warning3").style.color = "red";
        return false;
    }
    else if (dateCheck.exec(hDate) == null) {
        //event.preventDefault();
        document.getElementById("hireDate").style.borderColor = "red";
        document.getElementById("Warning4").innerHTML = "Please enter proper date.";
        document.getElementById("Warning4").style.color = "red";
        return false;
    }
    else if (genderCheck.exec(gender) == null) {
        document.getElementById("gender").style.borderColor = "red";
        document.getElementById("Warning5").innerHTML = " Please enter a gender";
        document.getElementById("Warning5").style.color = "red";
        return false;
    }

}