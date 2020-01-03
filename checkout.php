<?php
session_start();
include '../php/dbconnect.php';
// if the user is logged in, they are directed to checkout page
if (isset($_SESSION['SESS_LOGGEDIN'])== TRUE){
	$quantity=$_GET['quantity'];
        $cart_id= $_GET['pid'];
        $titles= $_GET['name'];
        $total= $_GET['amount'];
	header('Location: ../php/payment.php?name='.$titles.'&amount='.$total.'&quantity='.$quantity.'&pid='.$cart_id);
}
// else they are directed to log in again
else{
		header("location: ../php/login.php");
}
?>

