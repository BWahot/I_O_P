<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class SendMail {
    public function Send_Mail($conf, $mailCnt) {

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = $conf['smtp_host'];                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $conf['smtp_user'];                     // SMTP username
    $mail->Password   = $conf['smtp_pass']; // App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = $conf['smtp_port'];  

    //recipient
    $mail->setFrom($mailCnt['email_from'], $mailCnt['name_from']);
    $mail->addAddress($mailCnt['email_to'], $mailCnt['name_to']);     // Add a recipient

    //content
    $mail->isHTML(true);
    $mail->Subject = $mailCnt['subject'];
    $mail->Body    = $mailCnt['body'];

    $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {        
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
}

