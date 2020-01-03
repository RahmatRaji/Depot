function validateForm() {
 var x = document.form.name1.value;
  var y = document.form.cat.value;
 var a = document.form.brand.value;
 var q = document.form.pic.value;
  var n = document.form.description.value;
  var m = document.form.key.value;
  var p = document.form.price.value;
if(!isNaN(x))
{
alert("Please enter only characters for Product Name");

return false;
}




if(!isNaN(n))
{
alert("Please check the description");

return false;
}

if(!isNaN(m))
{
alert("Please check the key word section");

return false;
}

if(x=="")
{
alert("Please Enter Product Name");
return false;
}

if(y== "0")
{
alert("Please Enter Category Name");
return false;
}

if(a== "0")
{
alert("Please Enter Brand Name");
return false;
}

if(n=="")
{
alert("Please Enter Description ");
return false;
}

if(m=="")
{
alert("Please Enter Keywords");
return false;
}

if(p=="")
{
alert("Please Enter The Price");
return false;
}

if(q=="")
{
alert("Select an image");
return false;
}

}

function submitForm() {
   // Get the first form with the name
   // Usually the form name is not repeated
   // but duplicate names are possible in HTML
   // Therefore to work around the issue, enforce the correct index
   var frm = document.getElementsByName('form')[0];
   frm.submit(); // Submit the form
   frm.reset();  // Reset all form data
   return false; // Prevent page refresh
}

