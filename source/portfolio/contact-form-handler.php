<?php
$to = "ayaz15m@yahoo.com";
$subject = "Contact Me";
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$headers = "From: $email";
$sent = mail($to, $subject, $name, $message, $headers) ;

if($sent)
  {print "Your mail was sent successfully";}
else
  {print "We encountered an error sending your mail"; }

?>
