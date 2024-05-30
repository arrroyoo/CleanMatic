<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];
    $subject = "Bienvenido a CleanMatic";
    $message = "Gracias por unirte a CleanMatic. Estamos encantados de tenerte con nosotros.";
    $headers = "From: cleanmaticbcn@gmail.com" . "\r\n" .
               "Reply-To: cleanmaticbcn@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Configurar el servidor SMTP
    ini_set('SMTP', '192.168.12.151'); // Reemplaza 192.168.12.151 con la IP de tu VM
    ini_set('smtp_port', '25');

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
