# Membership_only_page

Passing JavaScript variables to PHP?

XMLHttpRequest request Example:

if (window.XMLHttpRequest){
     xmlhttp=new XMLHttpRequest();
 }

else{
     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }

 var PageToSendTo = "nowitworks.php?";
 var MyVariable = "variableData";
 var VariablePlaceholder = "variableName=";
 var UrlToSend = PageToSendTo + VariablePlaceholder + MyVariable;

 xmlhttp.open("GET", UrlToSend, false);
 xmlhttp.send();
