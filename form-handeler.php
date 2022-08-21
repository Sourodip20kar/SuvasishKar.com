<?php
$name = $_POST['name'];
$phonenumber = $_POST['phone-number'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];



$email_form = 'mail@mail.com'
$email_subject = 'new form submission'
$email_body = "User Name: $name.\n"."User email: $visitor_email.\n"."User phone_number: $phonenumber.\n"."Message: $message.\n";


$to = '51.sourodipkar2002@gmail.com';
$headers = "Form: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");



?>