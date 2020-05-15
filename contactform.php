<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	

	$email_subject = "ABHIVYAKTI QUERY";

	$email_body = "First Name: $fname.\n".
	"Last Name: $lname.\n".
	"User Email: $visitor_email.\n".
	"User Message: $message.\n";

	$to = "abhivyaktisrmcem2k19@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contact.html?success");

?>