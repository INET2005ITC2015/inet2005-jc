function checkForm() {

    if (document.forms["Form"].firstName.value.length == 0) {
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

