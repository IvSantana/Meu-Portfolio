<?php
//Variaveis

  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

  if(!empty($email) && !empty($name) && !empty($message)){

    $destino = 'ivandrosantana7@gmail.com';
    $assunto = 'contacto pelo site';
    
  }

?>