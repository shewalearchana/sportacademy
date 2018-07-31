 
function validate() {
   var un=document.loginform.uname.value;
   var pw=document.loginform.uname.value
        var username="admin";
    var password="admin";
    if ((un != username) && (pw != password)) {
          alert("Login was unsuccessful");
        return false;
    }
    alert("Login sucessfully");
}