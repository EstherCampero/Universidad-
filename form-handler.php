<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'matsabri23@gmail.com';
$email_subject = 'New Form Submission';
$email_body  = "User Name: $name./n".
                "User Email: $visitor_email./n".
                "Subject: $subject./n".
                "User message: $message./n";

$to = 'matiaschoqueflores5@gmail.com';
$headers = "From: $email_from /r/n";
$headers .= "Replay-to: $visitor_email /r/n";


mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")











?>