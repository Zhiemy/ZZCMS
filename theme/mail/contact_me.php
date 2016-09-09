<?php

include "../../inc/config.php";
if(empty($_POST['nama'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['pesan'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$nama = $_POST['nama'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$pesan = $_POST['pesan'];


mysql_query("insert into message(nama, email, phone, pesan) values ('$nama','$email_address','$phone', '$pesan')");

// Create the email and send the message
/*$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);*/

return true;			
?>