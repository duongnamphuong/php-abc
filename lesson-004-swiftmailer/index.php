<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Swift Mailer</title>
</head>
<body>
    <?php
        require_once '../vendor/autoload.php';

        // Create the Transport (Gmail use SMTP server smtp.gmail.com, port 465, and SSL)
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
        ->setUsername('sender_mail@gmail.com')
        ->setPassword('sender_password') // If sender's Google account has two-factor authentication, you have to generate an application password for this.
        ;

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $body = 'Hello, <p>Email sent through <span style="color:red;">Swift Mailer</span>.</p>';

        // Create a message
        $message = (new Swift_Message('Email Through Swift Mailer'))
        ->setFrom(['sender_mail@gmail.com' => 'sender\'s display name'])
        ->setTo(['recipient_1@yahoo.com.vn', 'recipient_2@gmail.com' => 'Recipient 2\'s display name'])
        ->setCc(['CcRecipient@gmail.com'])
        ->setBcc(['BccRecipient@yahoo.com.vn'])
        ->setBody($body)
        ->setContentType('text/html')
        ;

        // Send the message
        $result = $mailer->send($message);
        echo $result;
    ?>

</body>
</html>