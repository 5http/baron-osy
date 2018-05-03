<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

//Get posted data
$from = isset($_REQUEST['email']) ? $_REQUEST['email'] : die; 
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : die; 
$message = isset($_REQUEST['message']) ? $_REQUEST['message'] : die; 

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.baron-osy.be';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mail@baron-osy.be';                 // SMTP username
    $mail->Password = 'oRPUdE9lQ';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('mail@baron-osy.be', 'Baron Osy');
    $mail->addAddress('info@baron-osy.be', 'Baron Osy');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@baron-osy.be', 'Baron Osy');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Bericht van baron-osy.be';

    //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->Body = 'Naam:<br>'.$name.'<br><br>Email:<br>'.$from.'<br><br>Bericht:<br>'.$message;

    $mail->send();

    echo 'Message has been sent';

} catch (Exception $e) {

    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>

