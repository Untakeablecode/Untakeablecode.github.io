<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "untakeablemine@gmail.com";
$subject = "New message from your website";
$body = "This is an automated message. Do not reply."

mail ($to,$subject,$body);
echo "Your Message has been sent";

?>