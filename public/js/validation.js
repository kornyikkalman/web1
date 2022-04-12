function registerValidation() {
    var uname = document.forms["registerform"]["username"].value; 

    if (uname == "") {
        alert("Username field must be filled out!");
        return false; 
    }
}