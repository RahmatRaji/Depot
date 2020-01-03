
$nameError ="";
$emailError ="";
$passError ="";
$countryError ="";
$cityError ="";
$contactError ="";
$addError ="";
$picError ="";


if (empty($_POST['name1'])) {
$nameError = "Name is required";
echo "hhhahah";
} 
// check name only contains letters and whitespace
// if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name1' ])) {
// $nameError = "Only letters and white space allowed";
// echo "mn";
// }

if (empty($_POST['email'])) {
$emailError = "Email is required";
echo "hhhahkkkah";

} 

// check if e-mail address syntax is valid or not
if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$_POST['email' ])) {
$emailError = "Invalid email format";
}

if (empty($_POST['password'])) {
$passError = "Password is required";
echo "hhhahammmmmh";

} 
// if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0){
// $passError = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
// echo "1";

// }

if (empty($_POST['country'])) {
$countryError = "Country is required";
echo "2";

} 

if (empty($_POST['city'])) {
$cityError = "City is required";
echo "3";

}
 

if (empty($_POST['contact'])) {
$contactError = "Contact is required";
echo "4";

} 

if(!is_numeric($_POST['contact'])) {
    $contactError = "Data entered was not numeric";
    echo "5";

}

if (empty($_POST['address'])) {
$addError = "Address is required";
echo "6";

} 



if (empty($_POST['pic'])) {
$picError = "Image is required";
echo "7";

} 
else {
   $image =  $_FILES['pic']['name'];

}

}

