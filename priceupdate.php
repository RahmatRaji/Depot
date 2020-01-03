<?php

// code calculates the total price in the breadcrumbs
include 'dbconnect.php';
if (isset($_SESSION['cart'])){
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
$total = 0;
$i=1;
foreach ($cartitems as $key=>$id) {
		$sql = "SELECT * FROM products WHERE product_id = '$id'";
		$res=mysqli_query($conn, $sql);
		$r = mysqli_fetch_assoc($res);
        //collects data for each product added to cart
        $sqls= "SELECT * FROM cart WHERE p_id = '$id'";
        $a=mysqli_query($conn, $sqls);
        $q= mysqli_fetch_assoc($a);
        $id= $r['product_id'];

        $quantity=$q['qty'];
        $cart_id= $q['p_id'];
         // calculates the total price of the cart 
		$total = $total + $r['product_price']*$quantity;
		$i++; 
}
            echo " / Total price: $ ";
			echo ($total);
}
?>
