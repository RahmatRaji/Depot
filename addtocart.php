<?php
include "../php/dbconnect.php";
		// starting session
	    session_start();
	    // gets the ID of the product added to cart

        $id= $_GET['id'];
        $qty= 1;
        // Obtains the ip address of the machine

        $ip=$_SERVER[REMOTE_ADDR];

        //query inputs the cart into the cart table in the database

	   $sqls = "INSERT INTO `cart` ( `p_id`, `ip_add`, `qty`) VALUES ('$id', '$ip', '$qty')";
        $query=mysqli_query($conn, $sqls);

		// checks the status of the shopping cart

	if(isset($_GET['id']) & !empty($_GET['id']) ){
		if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){

        // checks if product already exists in the cart
			$items = $_SESSION['cart'];
			$cartitems = explode(",", $items);
			if(in_array($_GET['id'], $cartitems)){
				header('location: ../index.php?status=incart');
			}
        // runs for successful addition to cart
			else{
				$items .= "," . $_GET['id'];
				$_SESSION['cart'] = $items;
				header('location: ../index.php?status=success');	
				}

				}
		else{
			$items = $_GET['id'];
			$_SESSION['cart'] = $items;
			header('location: ../index.php?status=success');
			}
		
	}

        // runs when code has failed

	else{
		header('location: ../index.php?status=failed');
	}

?>