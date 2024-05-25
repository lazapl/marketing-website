<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'rghe123@o2.pl';

$email_subject = 'new form submission';

$email_body = "user name: $name.\n".
                "user email: $visitor_email.\n".
                "subject: $subject.\n".
                "user message: $message.\n".

$to = 'rghq123@o2.pl'

$headers = "From: $email_from \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")

?>