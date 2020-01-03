<!DOCTYPE HTML>
<html>
<head>
<title>Product Page</title>
<link rel="stylesheet" type="text/css" href="../css/product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script src="core.js"></script> -->
</head>

<body>
<div class="head">
  <img src="../pictures/DEPOT.png" style="width:100px;height:100px;border:0">
</div>

<div class="topnav">
  <a class="active" href="../index.php"> Home</a>
  <a href="../php/products.php">Product</a>
  <a href="../php/default.php">Sign Up</a>
  <a href="../php/default.php"> Shopping Cart</a>
  <a href="../php/add.php"> Add Product</a>
    
 <div class="search">
    
    <form action="../php/products.php" method="POST">
      <input   type="text" name="search" id="search" placeholder="Search for product"   
      >
      <button >Search</button>
      
    </form>
    
  </div>
  
  </div>

<!--php get variable name is mycaptupredid

viewing php come under this to be able to use the captured
  --->

<div class="nav">
<ul class="breadcrumb">
  <li><a href="../index.php">Home</a></li> 
  <li><a href="../php/default.php">Go to Cart</a></li>
  <li><a href="../php/default.php">  Checkout
    <img src="../pictures/cart.png" alt="cart icon" style="width:20px;height:20px;border:0" </li>
  
</ul>

</div>
<br><br><br>
<input style="border: none;outline: 0;padding: 8px;color: white;background-color: #4da6ff;" type="button" value="Go Back " onclick="history.back(-2); return false" />

 <div class="display">
    <?php 
    
    $obtain=$_GET["productid"];

    
    require '../php/viewing.php';
    ?>

    
  </div>
<br>





<div class="footer">
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
