<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carga las clases de PHPMailer
require 'd:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\src\Exception.php';
require 'd:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\src\PHPMailer.php';
require 'd:\Users\Colman\Documents\Entornos Graficos\PHPMailer-master\src\SMTP.php';

// Datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mailAmigo = $_POST["amigo_email"];
$nombreAmigo = $_POST["amigo_nombre"];

// Configuración del servidor SMTP de Mailtrap.io
$smtpServer = "sandbox.smtp.mailtrap.io";
$smtpPort = 2525;
$smtpUsuario = "5cf9e95d90f54c";
$smtpClave = "********036b";

// Crea una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = $smtpServer;
    $mail->SMTPAuth = true;
    $mail->Port = $smtpPort;
    $mail->Username = $smtpUsuario;
    $mail->Password = $smtpClave;

    // Configuración del correo electrónico
    $mail->setFrom($email, $nombre);
    $mail->addAddress('unmail@hotmail.com', 'Destinatario');
    $mail->Subject = 'Recomendacion de sitio web';
    
    // Configuración del correo como HTML
    $mail->isHTML(true);
    $mensaje = "
        <html>
        <body>
            <p>Hola $nombreAmigo,</p>
            <p>Te recomiendo visitar este <a href='twitter.com'>sitio web</a>.</p>
            <p>Espero que lo disfrutes.</p>
            <p>Saludos, $nombre</p>
        </body>
        </html>
    ";
    
    $mail->Body = $mensaje;

    // Envía el correo
    $mail->send();
    echo "El correo se ha enviado correctamente.";
} catch (Exception $e) {
    echo "Hubo un problema al enviar el correo: " . $mail->ErrorInfo;
}
?>