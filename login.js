function validateForm() {
// function validates the registeration form
	 var name = document.form.name1.value;
	  var email = document.form.email.value;
	   var password = document.form.password.value;
	    var country = document.form.country.value;
	     var city = document.form.city.value;
	      var contact = document.form.contact.value;
	       var pic= document.form.pic.value;
	        var address = document.form.address.value;

if(name=="")
{
alert("Please Check Name Input");
return false;
}


if(email=="")
{
alert("Please Check Email Input");
return false;
}

if(password=="")
{
alert("Please Check Password Input");
return false;
}

if(country=="0")
{
alert("Please Check Country Input");
return false;
}



if(city=="")
{
alert("Please Check City Input");
return false;
}

if(contact=="")
{
alert("Please Check Contact Input");
return false;
}


if(pic=="")
{
alert("Please Add a Picture");
return false;
}

if(address=="")
{
alert("Please Check Address Input");
return false;
}

if(!isNaN(name))
{
alert("Please enter only characters for your Name");

return false;
}


 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form.email.value))
  {
    return (true);
  }

  else{
    alert("You have entered an invalid email address!")
    return (false);
}
password.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(password.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(password.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(password.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(password.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    return !(charCode > 31 && (charCode < 48 || charCode > 57));
}




}






