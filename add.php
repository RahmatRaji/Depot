<!DOCTYPE HTML>
<html>
<head>
<title>Add</title>
<link rel="stylesheet" type="text/css" href="../css/designn.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../javascript/add.js"></script>
<script type="text/javascript">
</script>
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
  <!--Search Bar-->
 <div class="search"> 
    <form action="../php/products.php" method="POST">
      <input   type="text" name="search" id="search" placeholder="Search for product">
  </div>
  <button style="float: left;padding: 6px 10px;margin-top: 8px;margin-left: 11px;">Search</button>
  </form>
  </div>
</div>
<!--Breadcrumbs-->

<?php
  require '../php/updates.php';
?>        
<div class="nav">
<ul class="breadcrumb">
<li style="color: blue;"><a></a>

<?php

if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE)
{
echo "<a>Welcome " . $_SESSION['SESS_USERNAME'] . "<a>";
echo "<li><a style='margin-left: 11px;' href='../php/logout.php'> Logout </a></li>";
}
else{
echo "<a>Welcome Guest</a>";
echo "<li><a style='margin-left: 11px;' href='php/login.php'>Login </a> </li>";
}
?>

</li>
<li style="color: blue;">Shopping Cart
  <img id="shop" src="../pictures/cart.png" alt="cart icon" class="pic" style="width:20px;height:20px;border:0" >
   <a>
        <?php
        require '../php/updates.php';
        require '../php/priceupdate.php';
        ?>        
    </a> 
   </li>             
  <li><a href="../php/cart.php"> Go to Cart</a></li>

</div>
<!--Go Back Button-->

<input style="border: none;outline: 0;padding: 8px;color: white;background-color: #4da6ff;" type="button" value="Go Back " onclick="history.back(-1); return false" />

<!--Side Navigation-->

<div class="sidenav" >
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
<!--Add Product Form-->

<form name="form" method="post" action="../php/modular.php" onsubmit="return validateForm()" enctype="multipart/form-data">
  <div class="container8">
    <h1>Add Product</h1>
    <p>Please fill in this form to add a product.</p>
    <hr>

    <label for="title"><b>Name</b></label>
    <input type="text" placeholder="Product Name" name="name1" >

    <label for="title"><b>Image Upload</b></label>
    <br><br>
    <input type="file" name="pic" accept="image/*" >

    <br><br>

    <label><b>Category</b></label>
    <br><br>
    <select   name="cat">
    <option value="0">Select Category</option>
        <?php  
        include("../php/category.php");
        ?>
    </select>
    <br><br>

    <label for="brand"><b>Brands</b></label>
    <br><br>
    <select name="brand">
    <option value="0" name="brand" >Select Brand</option>
        <?php       
        include("../php/brand.php");
        ?>
    </select>
    <br><br> 
    <label for="price"><b>Price</b></label>
    <br><br>
    <input type="number" placelholder="Price" name="price" >

    <br><br>

    <label for="des"><b>Description</b></label>
    <input type="text" placeholder="Description" name="description" >
    

    <label for="key"><b>Keywords</b></label>
    <input type="text" placeholder="Keywords" name="key" >
    <hr>
    
    <button type="submit" name="submit" class="productadded" onsubmit="submitForm()">Add Product</button>
  </div>
</form>

<br><br><br>
<div style="height: 1200px;">
</div>
  <div class="footer" >
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