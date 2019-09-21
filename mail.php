<?php
$send_to = 'vinothmca2017@gmail.com';  //type in the receiver's email address
$subject = 'Test Mail';
$body = 'hello vinoth from  chennai';
$header = 'From:vinoth5421@gmail.com';

if (mail($send_to, $subject, $body, $header)) 
{
	echo "The mail has been sent successfully.";
} 
else 
{
	echo "Failed to send the mail.";
}
?>