//Antonio Fernandez
//New-M220
//User Input Password Portected 

var user=document.querySelector("#user").value;
var pass=document.querySelector("#pass").value;

function submitPass(){
  var user=document.querySelector("#user").value;
  var pass=document.querySelector("#pass").value;

  if(user=="antferna92"&&pass=="Info"){
    document.querySelector(".message").innerHTML="Success!";
  } else{
    document.querySelector(".message").innerHTML="Failure";
  }

}
