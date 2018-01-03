<?php

$first = $_GET["firstname"];
$password = $_GET["password"];
$email = $_GET["email"];
$location = $_GET["location"];

$message = "Masz wiadomosc od" .$first. " z ".$location;

$to = "karoljaworek04@gmail.com";
$subject = "mail from me";
$headers = "From: ".$email;

mail($to, $subject, $message, $headers);
header("Location: index.html");

?>