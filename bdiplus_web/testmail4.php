<?

$subject = "Test";
$message   = "Test 1234";
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Kanan <kananmvaidya@gmail.com >' . "\r\n";

if(mail('bdi++@bdiplus.com', $subject, $message, $Header))

echo "email sent";

else 

echo "email sending fail";

?>