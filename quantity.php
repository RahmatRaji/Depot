<?php
include "../php/dbconnect.php";



	$qty=$_POST['quantity'];
        $id= $_GET['id'];
	
	 // gets the ID of the product added to cart

        // Obtains the ip address of the machine

        $ip=$_SERVER[REMOTE_ADDR];

        //query inputs the cart into the cart table in the database

	   // query updates the quantity in the cart table
	   $sqls= "UPDATE `cart` SET `qty` = '$qty' WHERE `p_id` = '$id'";

        $query=mysqli_query($conn, $sqls);
        header("location: ../php/cart.php");

	




?>