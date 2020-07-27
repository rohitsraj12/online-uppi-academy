function validation(){

var name = document.getElementById("name");
var email = document.getElementById("email");
var subject = document.getElementById("subject");
var telephone = document.getElementById("telephone");
var message = document.getElementById("msg");

var emailExp = /^([a-zA-Z0-9\.-]+)([@])([a-zA-z0-9-]+)([\.])([a-z]{2,5})([\.])?([a-z]{2,8})?$/;
var telExp = /^([0-9]{10})$/;
var textOnlyExp = /^([a-zA-Z]+)$/;


var emptymsg = "fill all the fields";
var textOnlyMsg = "please fill with text";

function inputError(borderError){
    storeArg = borderError;
    storeArg.style.borderBottom = "1px solid #ff6600";
}

function errorMessage(selectId, dropErrorMessage){
    storeArgId = selectId;
    storeArgMessage = dropErrorMessage;

    storeArgId.insertAdjacentHTML("afterend", "<label>" + storeArgMessage + "</label>");
}

if(name.value === "" && 
   email.value === "" && 
   subject.value === "" && 
   telephone.value === "" && 
   message.value === "")
{
    errorMessage(name, emptymsg);
    inputError(name);

    errorMessage(email, emptymsg);
    inputError(email);

    errorMessage(subject, emptymsg);
    inputError(subject);

    errorMessage(telephone, emptymsg);
    inputError(telephone);

    errorMessage(message, emptymsg);
    inputError(message, emptymsg);
    return false;
}
else if()
