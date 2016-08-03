<?php
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'bdi++@bdiplus.com';//replace with your email

/*$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();*/

$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Kanan <kananmvaidya@gmail.com >' . "\r\n";

mail('bdi++@bdiplus.com', $subject, $message, $Header);

die;

?>