<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../css/designn.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script language="JavaScript" type="text/javascript" src="live.js"></script>

</head>

<body>

<div class="head">
  <img src="../pictures/DEPOT.png" style="width:100px;height:100px;border:0">
</div>

<div class="topnav">
  <a class="active" href="../index.php">Home</a>
  <a href="../php/products.php">Product</a>
  <a href="../php/default.php">Sign Up</a>
  <a href="../php/default.php"> Shopping Cart</a>
  <a href="../php/add.php"> Add Product</a>
    
 <div class="search">
    
    <form action="../php/products.php" method="POST">
      <input   type="text" name="search" id="search" placeholder="Search for product"   
      >
      
      
    
    
  </div>
  <button style="float: left;padding: 6px 10px;margin-top: 8px;margin-left: 11px;">Search</button>
  </form>
  </div>



<div class="nav">
<ul class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="../php/default.php">Go to Cart</a></li>
  <li><a href="../php/default.php"> Checkout
    <img src="../pictures/cart.png" alt="cart icon" style="width:20px;height:20px;border:0" </li>
  
</ul>

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
 <!-- <h2 style="margin-left: 550px;"> Product has been added </h2> -->
<?php


  class Database{
  	private $host;
  	private $username;
  	private $password;
  	private $dbName;

 
    
  	function connect(){
  		$this -> host= "localhost";
  		$this -> username ="root";
  		$this -> password = "";
  		$this -> dbName ="shoppn";


  		$conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);	


			
			
			
			if (!$conn) {
				$this->status_fatal = true;
				echo 'Connection BDD failed';
				die();
			} 
			else {
				$this->status_fatal = false;

				// echo "Connection to the database is successful<br>";
			}


			
	}

	function insert(){
    if(isset($_POST['submit'])){

			$conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    
   //$cat = isset($_POST['cat']) ? $_POST['cat'] : '';
   $cat=$_POST['cat'];
   $brand = isset($_POST['brand']) ? $_POST['brand'] : '';
   $title = isset($_POST['name1']) ? $_POST['name1'] : '';
   $price = isset($_POST['price']) ? $_POST['price'] : '';
   $desc = isset($_POST['description']) ? $_POST['description'] : '';
  
  $keywords = isset($_POST['key']) ? $_POST['key'] : '';
  $image = $_FILES['pic']['name'];
  // echo $cat;
  // echo "\n".$brand;
   // echo $image;
  // echo $price;

   			$sql = "INSERT INTO `products` ( `product_cat`, `product_brand`, `product_title`,  `product_price`,`product_desc`, `product_image`, `product_keywords`) VALUES ('$cat', '$brand','$title','$price','$desc', '$image', '$keywords')";

			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
			}
			else
			{
				 echo "<h2 style= margin-left:550px;> Product " .$title. " has been added to the database </h2> <br> ";
			}

	}
}

	function upload(){
	
	 if(isset($_FILES['pic'])){
      //$errors= array();
      $file_name = $_FILES['pic']['tmp_name'];
      $file_size = $_FILES['pic']['size'];
      $file_tmp = $_FILES['pic']['tmp_name'];
      $file_type = $_FILES['pic']['type'];
      // echo "$file_tmp";

       if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
     
      
      $uploaddir = '../pictures/';
      $uploadfile = $uploaddir . basename($_FILES['pic']['name']);
         if(move_uploaded_file($file_name, $uploadfile))
         	// echo "Successfully uploaded image <br>";

         $sqll= "INSERT INTO `products` (`product_image`) VALUES ('$file_name')";
     }
     
 

	}


  //   function category(){
		// $conns = new mysqli($this->host, $this->username, $this->password, $this->dbName);
		// $sqls = mysqli_query($conns, "SELECT cat_id,cat_name FROM categories");
		// while ($rows = $sqls->fetch_assoc()){
		// echo "<option value= ".$rows['cat_id'].">" . $rows['cat_name'] . "</option>";
		
		// }
            
  //   }



}


	$obj = new Database;
	$obj ->connect();
	$obj ->insert();
	$obj ->upload();
	// $obj ->category();
	

  

?>
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