<?php
//starting session
date_default_timezone_set('Etc/UTC');

require '../php/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";

//enable this if you are using gmail smtp, for mandrill app it is not required
$mail->SMTPSecure = 'tls';                            

//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "rahmatajike.raji@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "firstchild1";
//Set who the message is to be sent from
$mail->setFrom('rahmatajike.raji@gmail.com', 'From Home Depot');
//Set an alternative reply-to address
$mail->addReplyTo('rahmatajike.raji@gmail.com', 'Reply-to Name');
//Set who the message is to be sent to
$mail->addAddress('rahmat.raji@ashesi.edu.gh', 'To Name');
//Set the subject line
$mail->Subject = 'Your Order Has Been Successfully Received';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
 $mail->msgHTML(file_get_contents('../php/content.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    $status="in progress";
} else {
    echo "Message sent!";
        $status="completed";

}

session_start();
include '../php/dbconnect.php';
// collects product data
   $titles=$_POST['item_name']; 
    $total=$_POST['amount'];
    $quantity=$_POST['quantity'];
    $cart_id=$_POST['product_id']; 
    $invoice=mt_rand();
    $date = date('Y/m/d');
    $currency="$";
    $customer_id=$_SESSION['SESS_USERID'];
    $email= $_SESSION['SESS_USEREMAIL'];
    echo $email;
   //query adds the order made into the order table
   $sql = "INSERT INTO `orders` (   `product_id`, `customer_id`,`invoice_no`, `qty`, `order-date`, `status`) VALUES ('$cart_id', '$customer_id','$invoice','$quantity','$date', '$status')";
   //query adds the details of the payment to the payment table
    $sqls = "INSERT INTO `payment` (`amt`, `customer_id`,`product_id`, `currency`, `payment_date`) VALUES ('$total', '$customer_id','$cart_id','$currency','$date')";
   if(!$result = $conn->query($sql) && $conn->query($sqls) ){
		die('There was an error running the query [' . $conn->error . ']');
		}

	else{
				
		header('Location: ../php/payment_success.php?name='.$titles.'&amount='.$total.'&date='.$date. '&invoice='.$invoice);

		}


//deletes the items from cart
include "../php/dbconnect.php";
session_start();
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
$l=$_GET['remove'];
$cart_id= $_GET['ids'];

// removes cart items

if(isset($_GET['remove']) && !empty($_GET['remove']) ){
	$delitem = $_GET['remove'];
	unset($cartitems);
	$itemids = implode(",", $cartitems);
	$_SESSION['cart'] = $itemids;
}

if($_GET['remove']==0){
		$delitem = $_GET['remove'];

	unset($cartitems);
	$itemids= implode(",", $cartitems);
    $_SESSION['cart'] = $itemids;
}
?>