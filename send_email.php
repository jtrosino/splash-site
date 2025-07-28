<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/SMTP.php';
require __DIR__ . '/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $telefone = htmlspecialchars(trim($_POST['telefone'] ?? ''));
    $whatsapp = htmlspecialchars(trim($_POST['whatsapp'] ?? ''));
    $mensagem = htmlspecialchars(trim($_POST['mensagem'] ?? ''));

    $mail = new PHPMailer(true);
    try {
        // SMTP settings (confirmed from test)
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'email-ssl.com.br';
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('splash@splashassessoria.com.br', 'Splash Site');
        $mail->addAddress('splash@splashassessoria.com.br', 'Splash Admin');
        $mail->addReplyTo($email, $nome);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Novo contato via Cadastre-se';
        $mail->Body = "
            <h2>Nova Mensagem do Formulário</h2>
            <p><strong>Nome:</strong> {$nome}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Telefone:</strong> {$telefone}</p>
            <p><strong>WhatsApp:</strong> {$whatsapp}</p>
            <p><strong>Mensagem:</strong><br>{$mensagem}</p>
        ";
        $mail->AltBody = "Nome: {$nome}\nEmail: {$email}\nTelefone: {$telefone}\nWhatsApp: {$whatsapp}\nMensagem:\n{$mensagem}";

        $mail->send();
        header("Location: cadastre.php?msg=Message+sent+successfully!");
        exit;
    } catch (Exception $e) {
        header("Location: cadastre.php?msg=" . urlencode("Message could not be sent: {$mail->ErrorInfo}"));
        exit;
    }
} else {
    echo "Invalid request method.";
}
