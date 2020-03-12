<?php 
$name = $_POST['name'];
$subject = "Message from ".$name;
$companyName = $_POST['company-name'];
$phone = $_POST['phone-number'];
$mailFrom = $_POST['email'];
$teamSize = $_POST['team-size'];
$message = $_POST['message'];

$mailTo = "katherineprintz@gmail.com";
$headers="From: ". $mailFrom;
$txt = "You have received an email from " .$name."\n\n".$message;

mail($mailTo, $subject, $txt, $headers) or die("Error!");
header('Location: contact.php?mailsend');
echo "Thank You!";
?>