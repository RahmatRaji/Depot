$cart = $('#shop .quantity');
$cartIcon = $('#shop .pic');
$cartQty = $cart.html();

flag = false;
$('#button').click(function(e){
  //preventing click-friendly users to add
  //too many items in a second. This also helps
  //ajax functions to wait for server response
  //when updating shopping cart. 
  //You could also use different setTimeout 
  //for ajax qty update and set flag = false in there, 
  //cause 1 item per second may not be enough for common users.
  
  if (flag) {
    return;
  }
  flag = true;
  
  //ajax code here
  $cartQty++;
  $cart.html($cartQty);
    
  $cartIcon.addClass('cart-run');
  
  $cart.addClass('shake');
  $('#shop').addClass('glow');
  
  setTimeout (function(){
  $cartIcon.removeClass('cart-run');
  $cart.removeClass('shake');
    $('#shop').removeClass('glow');
    flag = false;
  },800);
   
});