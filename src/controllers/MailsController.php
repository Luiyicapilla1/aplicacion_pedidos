<?php
namespace lgc\aplicacion_pedidos\controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailsController{
    public function send_mail($destinatario, $asunto, $cuerpo){
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'b6fc81965e1baa';
            $mail->Password   = '36946466334838';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom('luisgarciacapilla1@gmail.com');
            $mail->addAddress($destinatario);

            //Content
            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body    = $cuerpo;
            $mail->AltBody = $cuerpo;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
