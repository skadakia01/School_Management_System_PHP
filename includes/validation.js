function validate(){
    var x = document.forms["register"]["name"].value;
    if (x==""){
        alert("Name cannot be blank!");
        return false;
    }
    var a = document.forms["register"]["phone"].value;
    if (a==""){
        alert("Contact cannot be blank");
        return false;
    }
    var b = document.forms["register"]["dob"].value;
    if (b==""){
        alert("Date Of Birth cannot be blank");
        return false;
    }
    var c = document.forms["register"]["pwd"].value;
    if (c==""){
        alert("Password cannot be blank");
        return false;
    }
    var cp = document.forms["register"]["cpwd"].value;
    if (cp=="" || cp!=c){
        alert("Passwords do not match");
        return false;
    }
}
