<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email']??'';
$mensaje = $_POST['mensaje']??'';

require 'vendor/autoload.php'; // Adjust path if not using Composer



    $mail = new PHPMailer(true); // Enable exceptions
try {
// Server settings
$mail->isSMTP(); // Use SMTP
$mail->Host = 'smtp.gmail.com'; // SMTP server
$mail->SMTPAuth = true; // Enable authentication
$mail->Username = 'santivilla19maya@gmail.com'; // SMTP username
$mail->Password = 'etrn oymd svlj thjb'; // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption (TLS/SSL)
$mail->Port = 587; // TCP port (587 for TLS)

// Recipients
$mail->setFrom('santivilla19maya@gmail.com');
$mail->addAddress($email); // Add recipient

// Content
$mail->isHTML(true); // Email format: HTML
$mail->Subject = 'Hola :D';
$mail->Body = '<b>'.$mensaje.'</b>';
$mail->AltBody = '';

$mail->send();
echo '
<script>
alert("Correo enviado con exito");
window.location.href="index.php";
</script>';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>