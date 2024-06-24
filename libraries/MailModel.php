<?php

namespace Libraries;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailModel
{
    private $mailer;

    public function __construct()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
        $this->mailer = new PHPMailer(true);
        $this->setupMailer();
    }

    public function setupMailer()
    {
        $this->mailer->isSMTP();
        $this->mailer->Host = $_ENV['EMAIL_HOST'];
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $_ENV['EMAIL_USERNAME'];
        $this->mailer->Password = $_ENV['EMAIL_PASSWORD'];
        $this->mailer->SMTPSecure = $_ENV['EMAIL_SMTP_SECURE'];
        $this->mailer->Port = $_ENV['EMAIL_PORT']; //465
    }

    public function sendMail($to, $subject, $body, $sender = "Redybag App System")
    {
        try {
            $this->mailer->setFrom($_ENV['EMAIL_USERNAME'], "$sender - Admin");
            $this->mailer->addAddress($to);
            $this->mailer->isHTML(true);
            $this->mailer->Subject = $subject;
            $this->mailer->Body    = $body;
            $this->mailer->send();
            return true;
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
        }
    }
}
