<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'D:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\src\Exception.php';
require 'D:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\src\PHPMailer.php';
require 'D:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\src\SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '5cf9e95d90f54c';
    $mail->Password = '********036b';

    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $asunto = $_POST["asunto"];
    $msg = $_POST["mensaje"];
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('destinatario@hotmail.com', 'Destinatario');
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = $msg;

    $mail->send();
    echo 'El correo se ha enviado correctamente.';
} catch (Exception $e) {
    echo 'Hubo un problema al enviar el correo: ' . $mail->ErrorInfo;
}
?>