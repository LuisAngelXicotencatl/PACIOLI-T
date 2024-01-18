
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar la clase PHPMailer
require '../vendor\phpmailer\phpmailer\src\Exception.php';
require '../vendor\phpmailer\phpmailer\src\PHPMailer.php';
require '../vendor\phpmailer\phpmailer\src\SMTP.php';

include("conexionbd.php");
session_start();
$cita = $_SESSION['id_cita'];
$idusuario = $_SESSION['id_usuario'];

$to = "xicotencatlmluis@gmail.com";
$subject = "Cita tomada";
$message = "Información de la cita:\nid-cita:$cita\n Id-Usuario: $idusuario";

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurar el servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'deycek82@gmail.com';
    $mail->Password = 'bjghreauimfvkuyb'; // Reemplaza con tu contraseña
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurar el remitente y destinatario
    $mail->setFrom('deycek82@gmail.com', 'Actualizacion de ponencias');
    $mail->addAddress($to);

    // Configurar el contenido del correo
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Enviar el correo
    $mail->send();
    header("location: ../view/inicio.php");
} catch (Exception $e) {
    echo "Error al enviar correo: {$mail->ErrorInfo}";
}
?>
