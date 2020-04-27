<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = $_POST['email'];

$to = "jusanmagno@gmail.com";

$subject = "Enviado do Site de " . $_POST['nome'];

$message = "De: " . $_POST['nome'] . " \n" . " Telefone: " . $_POST['tel'] . " \n" . " mensagem: " . $_POST['msn'];

$headers = "De:" . $from;

if (mail($to, $subject, $message, $headers)) {

    echo "A mensagem de e-mail foi enviada.";
    $_SESSION['msg'] = 'Mensagem enviada com sucesso';
    header('Location: contact.html');
} else {
    
    $_SESSION['msg'] = 'há um erro ao enviar mensagem. Tente mais tarde';
}
