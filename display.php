
<?php
include "php/dbconnect.php";
$sqls="SELECT * FROM products ";
$array = mysqli_query($conn,$sqls);
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
     
      <a><img src="pictures/'. $images.'"style="width:90%"></a>
      <div class="container">
        <a style="text-decoration: none;" href="php/view.php"><h2 style="text-align: center;">'.'' .$title. '</h2></a>
        <a  style="text-decoration: none;" href="php/view.php" ><h3 style="text-align: center;text-decoration: none;">'.'$'.$price.'</h3></a>
        
        
        <p><a href="php/addtocart.php?id='.$id.'"><button class="button" id="button">Add to Cart</button></a></p>
        <p style="text-decoration: none;"><a href="php/view.php?productid='.$id.'"><button class="button1">View Product</button></a></p>
      </div>
    </div>
  </div>
  
  ';


       
			}
		}else
			{
				
			}

//displaying image:<img src="source.php?id=1" width="140" height="165" />
?>