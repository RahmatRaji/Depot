// update quantity button listener
$('.quantity').on('submit', function(){
 
    // get basic information for updating the cart
    var id = $(this).find('.product-id').text();
    var quantity = $(this).find('.cart-quantity').val();
 
    // redirect to update_quantity.php, with parameter values to process the request
    window.location.href = "price.php?id=" + id + "&quantity=" + quantity;
    return false;
});