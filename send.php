<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "robbscience@gmail.com";
$subject = "New message from your website";
$body = "This is an automated message. Do not reply.";

mail ($to,$subject,$body, "From: $name <$email>");
echo "Your Message has been sent";
?>