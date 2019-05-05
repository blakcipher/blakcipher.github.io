<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'Sender email address here';
	$email_subject = 'New mesage from Portfolio';
	$email_body = "Name: $name.\n".
		      "Email: $email.\n".
		      "Subject: $subject.\n".
                      "Message: $message.\n";
		      
	$to = "blakcipher0@gmail.com"
	$headers = "From: $email_from \r\n";
	$headers. = "Reply-To: $email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	header("location: index.html");

?>
