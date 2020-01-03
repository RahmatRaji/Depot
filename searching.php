<?php
include "../php/dbconnect.php";


if(isset($_POST["search"])){
	$search=$_POST["search"];

//Write query
$sql="SELECT * FROM products WHERE product_keywords LIKE '%$search%'";

$array = mysqli_query($conn,$sql);


//check if record was returned
			if(mysqli_num_rows($array))
			{
					//loop through to see if there is any result
				foreach($array as $recordset)
				{
					  $title=$recordset["product_title"];
                      $images= $recordset['product_image'];
                      $id=$recordset['product_id'];
					
					$price=$recordset["product_price"];

					echo '<div class="column" style="margin-top: 100px;">
    <div class="productcard">
     
      <a><img src="../pictures/'. $images.'"style="width:90%"></a>
      <div class="container">
        <a style="text-decoration: none;" href="../php/view.php"><h2 style="text-align: center;">'.'' .$title. '</h2></a>
        <a  style="text-decoration: none;" href="../php/view.php" ><h3 style="text-align: center;text-decoration: none;">'.'$'.$price.'</h3></a>
        
        
        <p><a href="../php/addtocart.php?id='.$id.'"><button class="button" id="button">Add to Cart</button></a></p>
        <p style="text-decoration: none;"><a href="../php/view.php?productid='.$id.'"><button class="button1">View Product</button></a></p>
      </div>
    </div>
  </div>
  ';


       
			}
		}else
			{
				echo '<div class="container8" >
			
				<h1 style=  margin-left:10px;text-align:center>No product matches your search </h1>
				 </div> ';
				
			}

}
else{
	//Write query
$sql="SELECT * FROM products ";
//echo "<table>";
$array = mysqli_query($conn,$sql);


//check if record was returned
			if(mysqli_num_rows($array))
			{
					//loop through to see if there is any result
				foreach($array as $recordset)
				{
					  $title=$recordset["product_title"];
                      $images= $recordset['product_image'];
                      $id=$recordset['product_id'];
					
					$price=$recordset["product_price"];

					echo '<div class="column" style="margin-top: 100px;">
    <div class="productcard">
     
      <a><img src="../pictures/'. $images.'"style="width:90%"></a>
      <div class="container">
        <a style="text-decoration: none;" href="../php/view.php"><h2 style="text-align: center;">'.'' .$title. '</h2></a>
        <a  style="text-decoration: none;" href="../php/view.php" ><h3 style="text-align: center;text-decoration: none;">'.'$'.$price.'</h3></a>
        
        
        <p><a href="../php/addtocart.php?id='.$id.'"><button class="button" id="button">Add to Cart</button></a></p>
        <p style="text-decoration: none;"><a href="../php/view.php?productid='.$id.'"><button class="button1">View Product</button></a></p>
      </div>
    </div>
  </div>
  ';


       
			}
		}else
			{
				
			}

}


?>