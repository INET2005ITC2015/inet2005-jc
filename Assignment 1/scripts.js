/**
 * Created by inet2005 on 10/13/15.
 */

var nameReg = "(^[A-Z]{1})[a-z]+";
var nameCheck = new RegExp(nameReg);

function checkForm() {

    var fName = document.getElementById("firstName").value;

    if (nameCheck.exec(fName) == null) {
        event.preventDefault();
        document.getElementById("firstName").style.borderColor = "red";
        alert("Please fill in highlighted text field");
        return false;
    }
    else if (document.forms["Form"].lastName.value.length == 0) {
        document.getElementById("lastName").style.borderColor = "red";
        alert("Please fill in highlighted text field");
        return false;
    }
    else if (document.forms["Form"].address1.value.length == 0) {
        document.getElementById("address1").style.borderColor = "red";
        alert("Please fill in highlighted text field");
        return false;
    }
    else if (document.forms["Form"].address2.value.length == 0) {
        document.getElementById("address2").style.borderColor = "red";
        alert("Please fill in highlighted text field");
        return false;
    }
    else if (document.forms["Form"].email.value.length == 0) {
        document.getElementById("email").style.borderColor = "red";
        alert("Please fill in highlighted text field");
        return false;
    }
    else if (document.Form.accept.checked == false) {
        document.getElementById("Warning").innerHTML = "Please check that you have accepted terms!";
        document.getElementById("Warning").style.color = "red";
        return false;
    } else {
        alert("You Did it!")
    }

}
function change(fieldID){

    var formItem = document.getElementById(fieldID);
    if(formItem != null){
        formItem.style.backgroundColor = "Yellow";
        formItem.style.fontStyle = "Italic";
        formItem.parentNode.style.textDecoration = "underline"
    }
}

function changeBack(fieldID){
    var formItem = document.getElementById(fieldID);
    if(formItem != null){
        formItem.style.backgroundColor = "White";
        formItem.style.fontStyle = "normal";
        formItem.parentNode.style.textDecoration = "none"
    }
}