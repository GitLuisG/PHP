<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'ssl://smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS
$mail->Port = "465";

//Set the encryption system to use - ssl (deprecated) or tls


//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "correousertb@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Luisgerardo3";

//Set who the message is to be sent from
$mail->setFrom('correousertb@gmail.com', 'First Last');


//Set who the message is to be sent to
$mail->addAddress('eprimo68@gmail.com', 'John Doe');