<?php
$name=$_POST['name'];
$Visitor_email=$_POST['email'];
$Subject=$_POST['subject'];
$Message=$_POST['message'];


$email_form='rajputnishant393@gmail.com';

$email_subject='New Form Submission';

$email_body="User Name:$name.\n".
            "User Name:$visitor_email.\n".
            "User Name:$subject.\n".
            "User Name:$message.\n";
$to='rajputnishant393@gmail.com';

$headers="From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n;


mail($to,$email_subject,$email_body,$headers);

header("Loaction: contact.html");
 ?>