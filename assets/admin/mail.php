<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'nacedo.dev@gmail.com'; // Tu dirección de correo electrónico
    $subject = 'Portfolio contact form';
    $body = "$fullname\n\n\n$message";

    // Encabezados adicionales
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envío del correo con los encabezados adicionales
    mail($to, $subject, $body, $headers);

    header('Location: ../../index.html');
}
?>
