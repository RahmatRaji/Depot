
<?php
include "../php/dbconnect.php";
// require "view.php";

//get id of the product clicked
//use the id to select and view
// s

$sqls="SELECT * FROM `products` WHERE  `product_id` = $obtain";
// echo "<br>";
//     echo "<br>";
//     echo "<br>";
//     echo "<br>";
// //echo "nnn";
// echo $sqls;


$array = mysqli_query($conn,$sqls);
// return $array;
// echo $array;

//check if record was returned
			if(mysqli_num_rows($array)){
			// 
        //fetch
        $queryresult = mysqli_fetch_assoc($array);
					//loop through to see if there is any result
				
					  $title=$queryresult["product_title"];
                      $images=$queryresult['product_image'];
                      $id=$queryresult['product_id'];
					
					$price=$queryresult["product_price"];
					$desc=$queryresult["product_desc"];


					echo '<div class="container">
  <div class="box">
    <div class="product-img">
    
      <img src="../pictures/'. $images.'"style="width:250px">
      <ul class="imageList">
            <li><a href="php/default.php"><img src="../pictures/'. $images.'"style="width: 92px; height: 92px;"></a></li>
            <li><a href="php/default.php"><img src="../pictures/'. $images.'"style="width: 92px; height: 92px;"></a></li>
            <li><a href="php/default.php"><img src="../pictures/'. $images.'"style="width: 92px; height: 92px;"></a></li>
      </ul>
    </div>


    <div class="product-info">
      <h1>'.''.$title.'</h1>   
      <p class="price"> '.'$'.$price.'</p>
      <div class="rating">
      <span><u style="color: black;"><p class="description " style="font-size: 20px;"> User Ratings :</p></u></span>
      <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
      <p style="color: black;">4.1 average based on 254 reviews.</p>
      </div>
      <br>
      <p class="description " style="font-size: 20px;"><u> <strong>Description :</u></p></strong>      
      <p >'.''.$desc.'</p>

      </select>
      <br /><br />
      
      <table>
      <tr>
        <td>
      <br /><br />
      <td>
        <p><a href="../php/addtocart.php?id='.$id.'"><button class="wish" id="button">Add to Cart</button></a></p>
    </tr>
  </table>
    </div>
   
  </div>
</div>';


  }

  else{
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Waaa";
  }     
			
	

//displaying image:<img src="source.php?id=1" width="140" height="165" />
?>