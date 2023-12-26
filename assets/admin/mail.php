<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'nacedo.dev@gmail.com'; 
    $subject = 'Formulario de contacto';

    // Formato HTML para el correo
    $body = "<html><body><h2 style='font-size: 18px;'>Nombre: <strong>$fullname</strong></h2><p>Mensaje: $message</p></body></html>";

    // Encabezados adicionales para correo HTML
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Envío del correo con los encabezados adicionales
    $mail = mail($to, $subject, $body, $headers);
    // Verifica si el correo se envió correctamente
    if ($mail) {
        // Redireccionar después de enviar el correo
        header('Location: ../../index.html');
    }
}
?>
