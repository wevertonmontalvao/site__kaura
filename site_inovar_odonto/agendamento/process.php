<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$mailLoader   = new SplClassLoader('SimpleMail', './vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('./config/config.php');

$errors = array();
$data   = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['name']));
    $email   = stripslashes(trim($_POST['email']));
    $telefone = stripslashes(trim($_POST['telefone']));
    $melhor_dia = stripslashes(trim($_POST['melhor-dia']));
    $melhor_periodo = stripslashes(trim($_POST['melhor-periodo']));
    $especialidade = stripslashes(trim($_POST['especialidade']));
    $clinica    = stripslashes(trim($_POST['clinica']));

    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email)) {
        die("Header injection detected");
    }

    if (empty($name)) {
        $errors['name'] = $config->get('messages.validation.emptyname');
    }

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = $config->get('messages.validation.emptyemail');
   }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSender($name);
        $mail->setSenderEmail($email);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $especialidade .' '.$clinica );

        $body = "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html>
            <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            </head>
            <body>
                <h1>Agendamento para {$especialidade} na [Clinica] {$clinica }</h1>
                <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
                <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>                
                <p><strong>{$config->get('fields.telefone')}:</strong> {$telefone}</p>
                <p><strong>{$config->get('fields.melhor-dia')}:</strong> {$melhor_dia}</p>
                <p><strong>{$config->get('fields.melhor-periodo')}:</strong> {$melhor_periodo}</p>
                <p><strong>{$config->get('fields.unidade')}:</strong> [Clinica] {$clinica}</p>
            </body>
        </html>";

        $mail->setHtml($body);
        $mail->send();

        $data['success'] = true;
        $data['message'] = $config->get('messages.success');
    }

    echo json_encode($data);
}