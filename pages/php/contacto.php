<?php
if(isset($_POST['email'])) {

    // Información recibida del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $experiencia = $_POST['experiencia'];

    // Mensaje que se enviará por correo electrónico\n 
    $mensajeCompleto = "Nombre: ".$nombre."\n"."Email: ".$email."WhatsApp: ".$whatsapp."\n"."Experiencia: ".$experiecnia;

    // Envío del mensaje por correo electrónico
    mail('info@textrip.com.ar', 'Mensaje de formulario de contacto', $mensajeCompleto);
    
//     // Redireccionar a una página de éxito
//     header('Location: contacto-exito.html');
// } else {
//     // Si ocurre algún error, redireccionar a una página de error
//     header('Location: contacto-error.html');
// }
?>