<?php 
// code for deleting the contents in the shopping cart
include "../php/dbconnect.php";

session_start();
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
$l=$_GET['remove'];
$cart_id= $_GET['ids'];

// removes cart items

if(isset($_GET['remove']) && !empty($_GET['remove']) ){
	$delitem = $_GET['remove'];
	unset($cartitems[$delitem]);
	$itemids = implode(",", $cartitems);
	$_SESSION['cart'] = $itemids;
	$sql= "DELETE FROM `cart` WHERE `p_id` ='$cart_id'";
	$query=mysqli_query($conn, $sql);
}

if($_GET['remove']==0){
	$delitem = $_GET['remove'];
	unset($cartitems[0]);
	$itemids= implode(",", $cartitems);
    $_SESSION['cart'] = $itemids;
    $sql= "DELETE FROM `cart` WHERE `p_id` ='$cart_id'";
	$query=mysqli_query($conn, $sql);

}
header('location:../php/cart.php');

?>