<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Definir variáveis
    $to = "guedsiago@gmail.com"; // E-mail de destino
    $subject = htmlspecialchars($_POST['subject']); // Título da mensagem
    $name = htmlspecialchars($_POST['name']); // Nome do usuário
    $email = htmlspecialchars($_POST['email']); // E-mail do usuário
    $message = htmlspecialchars($_POST['message']); // Mensagem do usuário

    // Corpo do e-mail
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n\n";
    $body .= "Mensagem:\n$message";

    // Cabeçalhos de e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>