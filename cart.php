<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../css/designn.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="head">
  <img src="../pictures/DEPOT.png" style="width:100px;height:100px;border:0">
</div>
<div class="topnav">
  <a class="active" href="../index.php"> Home</a>
  <a href="../php/products.php">Product</a>
  <a href="../php/cart.php"> Shopping Cart</a>
  <a href="../php/add.php"> Add Product</a>
  <a href="../php/regsiter.php">Sign Up</a>
  
<div class="search">
  <form action="../php/products.php" method="POST">
      <input   type="text" name="search" id="search" placeholder="Search for product"> 
</div>
  <button style="float: left;padding: 6px 10px;margin-top: 8px;margin-left: 11px;">Search</button>
  </form>
</div>
<div style="height: 70px;">
</div>

<input style="border: none;outline: 0;padding: 8px;color: white;background-color: #4da6ff;" type="button" value="Go Back " onclick="history.back(-2); return false" />

<div class="sidenav" style="margin-top: 10px;">
  <p href="../php/default.php" style="font-size: 24px;text-align: center;color: grey"> CATEGORIES</p>
  <a href="../php/default.php">Phones & Tablets</a>
  <a href="../php/default.php">Electronics</a>
  <a href="../php/default.php">Fashion</a>
  <a href="../php/default.php">Home & Office</a>
  <a href="../php/default.php">Games </a>
  <a href="../php/default.php">Health & Beauty</a>
  <a href="../php/default.php">Computing</a>
  <a href="../php/default.php">Watches</a>
  <a href="../php/default.php">Baby & Kids</a>
  <a href="../php/default.php">Groceries</a>
</div>

<div class="brands" >
  <a href="" style="font-size: 24px; text-align: center"> BRANDS</a>
  <p style="font-size: 18px;"><strong> Phones & Tablets</strong> </p>
  <a href="../php/default.php">Apple</a>
  <a href="../php/default.php">Android</a>
  <a href="../php/default.php">Huwaei</a>
  <p style="font-size: 18px;"><strong> Fashion</strong> </p>
  <a href="../php/default.php">Gucci</a>
  <a href="../php/default.php">Prada </a>
  <a href="../php/default.php">Givenchy</a>  
  <p style="font-size: 18px;"> <strong>Home and Office</strong></p>
  <a href="../php/default.php">Hicense</a>
  <a href="../php/default.php">Kraft</a>
  <a href="../php/default.php">IKEA</a>
</div>


<div class="footer" style="margin-top: 1300px;">
<div class="contain">
<div class="col">
    <h1>Company</h1>
    <ul>
      <li>About</li>    
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
</div>
<div class="col">
    <h1>Products</h1>
    <ul>
      <li>Home Appliances</li>
      <li>Education</li>
      <li>Baby & Kids</li>
      <li>Office</li>
     
    </ul>
</div>
<div class="col">
    <h1>Social Media</h1>
    <ul>
      <li>Facebook</li>
      <li>Twitter</li>
      <li>Instagram</li>
      <li>Linkedin</li>
      <li>Snapchat</li>
    </ul>
</div>
  
<div class="col">
    <h1>Support</h1>
    <ul>
      <li >Make a donation</li>
      <li>Feedback</li>
      <li>Spread the word</li>
    </ul>
</div>
<div class="clearfix"></div>
</div>
</div>
</body>
</html>
<?php 
include "../php/dbconnect.php";
?>
<div class="container">

<?php 
include 'dbconnect.php';
// starts a session
session_start();
// checks the status of the shopping cart
if (isset($_SESSION['cart'])){
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
}
?>

<h1 style="margin-left: 300px;"> Shopping Cart </h1>
	<div class="row">
	  <table class="table">
	  	<tr style=" background-color: #000066;">
	  		<th style="color: white;">Product Number</th>
	  		<th style="color: white;">Item Name</th>
	  		<th style="color: white;">Price</th>
	  	    <th style="color: white;">Quantity</th>
            <th style="color: white;">Update</th>
	  	    <th style="color: white;">Delete</th>
</tr>
<?php	
		$total = 0;
		$i=1;
    if (isset($_SESSION['cart'])){
    $items = $_SESSION['cart'];
    $cartitems = explode(",", $items);
// code runs when there is no item in the shopping cart    
     if ($items == NULL){
          echo '<h3 style="text-align: center;text-decoration: none; color:red;"> No Item In Cart</h3>';
          return false;
      }
      else{
// code runs when there are items in the shopping cart
		 foreach ($cartitems   as $key=>$id) {   
        $sql = "SELECT * FROM products WHERE product_id = '$id'";
        $sqls= "SELECT * FROM cart WHERE p_id = '$id'";
        $res=mysqli_query($conn, $sql);
        $a=mysqli_query($conn, $sqls);
        $r = mysqli_fetch_assoc($res); 
        $q= mysqli_fetch_assoc($a);
        $id= $r['product_id'];
        $quantity=$q['qty'];
        $cart_id= $q['p_id'];
        $titles= $r['product_title'];
      ?>
<form method="post" action="../php/quantity.php?id=<?php echo $id; ?>">      
    <tr>	
	  		<td><?php echo $i; ?></td>
	  		<td><?php echo $r['product_title']; ?></td>
	  		<td>$<?php echo $r['product_price']; ?></td>
        <td><input  type="number" name="quantity" min="1" value="<?php echo $quantity; ?>"></td>
        <td><a href="../php/quantity.php?id=<?php echo $id; ?>"><button class="button" id="button" type="submit">Update</button></a></td>
        </form>
        <td><a href="delcart.php?remove=<?php echo $key;?>& ids=<?php echo $cart_id; ?>">Remove</a> </td>
	  </tr>
		<?php 
			$total = $total + $r['product_price']*$quantity;
                  $i++; 	 
     }
     }
		?>
		<tr>
		</tr>
</table>
	     <h2><strong>Total Price: $<?php echo $total;}
       else{
         echo '<h3 style="text-align: center;text-decoration: none; color:red;"> No Item In Cart</h3>';
          return false;
        }?></strong></h2>
	     <div style="height: 100px;">
	     </div>
        <table style="margin-left: 300px;">
        	<tr>
	         <td> <a href="../php/checkout.php?name=<?php echo $titles; ?>&amount=<?php echo $total; ?>&quantity=<?php echo $quantity; ?>&pid=<?php echo $cart_id; ?>"><button class="button" id="button" style="width: 100%" >Checkout</button></a></td>
	         <td>  <a href="../index.php"><button class="button" id="button" style="width: 100%" >Return to Shopping</button></a></td>
	        </tr>
	     </table>
</div>
</div>
</div>
</body>
</html>