<?php
if($_POST["submit"]) {
$recipient = "robbscience@gmail.com";
$subject = 'Email message from your website';
$name = $_POST ["yourName"];
$email = $_POST["yourEmail"];
$message = $_POST["message-me"];

$mailBody="Name: $name\nEmail: $email\n\n$message";
mail($recipient, $subject, $mailBody, "From: $name <$email>");
$thankYou="<p>I will get back to you soon.</p>";
}
?>