<?php
session_start();
include '../php/dbconnect.php';
// checks if the user is logged in
if (isset($_SESSION['SESS_LOGGEDIN'])== TRUE){
	header("location: ../index.php");
}
else{
// if the password and email do not match,user is redirected to the login page
$message="";
if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT * FROM `customer` WHERE `customer_email`='" . $_POST["email"] . "' and `customer_pass` = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
		// echo "nana";
	    header('location: ../php/login.php');

	} else 

	{

//upon successful log in user is redirected to the index page
//stores uers id and email as a session
$log= mysqli_fetch_assoc($result);
$_SESSION['SESS_LOGGEDIN'] = TRUE;
$_SESSION['SESS_USERID'] = $log['customer_id'];
$_SESSION['SESS_USEREMAIL'] = $_POST["email"];
$_SESSION['SESS_USERNAME'] = $log["customer_name"];

$message = "You are successfully authenticated!";
header('location: ../index.php');
	}
}
else{
}

}

?>