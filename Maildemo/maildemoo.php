<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'iamnotabotbaby@gmail.com';                     // SMTP username
    $mail->Password   = 'yoyohoneysingh123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('iamnotabotbaby@gmail.com', 'tryingtrying');
    $mail->addAddress('sharma.aishwarya1610@gmail.com', 'MY BABY');     // Add a recipient
    

   
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'TESTING AUTOMATED EMAIL SCRIPT';
    $mail->Body    = '<b>I LOVE YOU , I WAS WORKING ON THIS , THIS MESSAGE HAS BEEN SENT BY MY WEBSITE</b>';
    $mail->AltBody = 'HI THERE I AM A BOT , DONOT REPLY';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}