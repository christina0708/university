<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject_email = $_POST['subject'];
$message_email = $_POST['message'];


$email_from =' info@yourwebsite.com'
$email_subject =' new form submission'
$email_body = "user name: $name.\n". 
"user email: $visitor_email.\n".
"subject: $email_subject.\n". 
"user message: $message.\n";

$to = 'christysaute7@gmail.com';
$headers = "from: $email_from \r\n;
$headers .= "reply-to: $visitor_email \r\n;

mail($to,$email_subject,$email_body,$headers)
header("Location. contact.html")
?>