<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'd:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\src\Exception.php';
require 'd:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\srcPHPMailer.php';
require 'd:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\srcSMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '5cf9e95d90f54c';
    $mail->Password = '********036b';

    $mail->setFrom('GeronimoColman@mailtrap.io', 'Geronimo Colman');
    $mail->addAddress('prueba@jajamail.com', 'Vos');
    $mail->isHTML(true);
    $mail->Subject = 'Prueba';
    $mail->Body = '<html><body><h1>Correo de prueba con formato HTML</h1><p>Este es un correo de prueba</p></body></html>';

    $mail->send();
    echo 'El correo se ha enviado correctamente.';
} catch (Exception $e) {
    echo 'Hubo un problema al enviar el correo: ' . $mail->ErrorInfo;
}
?>