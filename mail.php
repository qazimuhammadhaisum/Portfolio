<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['name'];
$to = "qazihaisum@gmail.com";
$subject = "Mail from website";

$headers = "From: ".$name. "\r\n" .
"CC: sarakha2909@gmail.com";

$text = "You Have recived an e-mail from ".$name ."\r\nEmail: " .$email ."\r\n Message: ". $message;


if($email!=NULL){
    mail($to, $subject, $text, $headers);
}

header('Location:thankyou.html');

?>










