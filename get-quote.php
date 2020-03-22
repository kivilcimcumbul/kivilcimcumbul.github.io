<?php 
$to = 'info@mediacity.co.in'; // Put in your email address here
$subject  = "Contact Us Form"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$name = stripslashes($_REQUEST['quote-name']); // sender's name
$email = stripslashes($_REQUEST['quote-email']); // sender's email
$mobile = stripslashes($_REQUEST['quote-mobile']); 
$address = stripslashes($_REQUEST['quote-address']);
$city = stripslashes($_REQUEST['quote-city']); 
$country = stripslashes($_REQUEST['quote-country']); 
$pin = stripslashes($_REQUEST['quote-pin']); 
$product = stripslashes($_REQUEST['quote-product']);
$dtl = stripslashes($_REQUEST['quote-dtl']);
$msg = "";

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "Name: ".$name."\r\n\n";  // add sender's name to the message
$msg .= "E-mail: ".$email."\r\n\n";  // add sender's email to the message
$msg .= "Mobile: ".$mobile."\r\n\n";  // add sender's sources to the message
$msg .= "Address: ".$address."\r\n\n";  // add sender's checkboxes to the message
$msg .= "City: ".$city."\r\n\n";  // add sender's checkboxes to the message
$msg .= "Country: ".$country."\r\n\n";  // add sender's checkboxes to the message
$msg .= "Pin Code: ".$pin."\r\n\n";  // add sender's checkboxes to the message
$msg .= "Product Name: ".$product."\r\n\n";  // add sender's checkboxes to the message
$msg .= "Product Details: ".$dtl."\r\n\n";  // add sender's checkboxes to the message
$msg .= "\r\n\n"; 
echo $msg;
$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
	header("Location:index.html");	
} else {
	echo 'Message could not be sent!';   //This is the message that will be shown when an error occured: the message was not send
}

?>