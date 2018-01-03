$first = $_GET["firstname"];
$password = $_GET["password"];
$email = $_GET["email"];
$location = $_GET["location"];

$mailmassage = "Masz wiadomość od ".first " from ".$location;

$to = karoljaworek04@gmail.com;
$subject = "My website form";
$headers = "From: ".$email;

mail($to, $subject, $mailmassage, $headers);
header("Location: index.html");