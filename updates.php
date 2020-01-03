  <?php
  // displays the number of items in the breadcrumbs

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    // checks if there are any items in the cart
    if (isset($_SESSION['cart'])){
        $items = $_SESSION['cart'];
    // if no item exists in the cart , code below is executed
    if ($items==""){
        return false;
    }
    // if items exist in the cart, code below is executed
    else{
          $cartitems = explode(",", $items);
          echo count($cartitems);           
    }

    }
         
?> Item(s) in cart
