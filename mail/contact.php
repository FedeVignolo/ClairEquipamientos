<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    $recipient = "fedevignolo0594@gmail.com";
    // Construye el correo.
    $email_content = "Nombre: $name\n";
    $email_content .= "Correo electrónico: $email\n\n";
    $email_content .= "Asunto: $subject\n\n";
    $email_content .= "Mensaje:\n$message\n";

  
    mail($recipient, "Mensaje de contacto de Clair Equipamientos", $email_content);


    header("Location: index.html");
} else {
    
    header("Location: index.html");
}