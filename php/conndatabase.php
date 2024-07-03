<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $data = date ('d/m/Y');
    $hora = date ('H:i:s');

    $sever = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'portfolio';

    $conn = new mysqli($sever, $user, $password, $database);

    if ($conn ->connect_error){
        echo ('sucess');
    } else{
        echo ('erro');
    }

    $stmt = $conn->prepare("INSERT INTO mensagens(name, email, subject, message, data, hora) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $name, $email, $subject, $message, $data, $hora);

    if ($stmt->execute()){

        echo('mensagem enviada');

    }else{

        echo('erro ao enviar a mensagem'. $stmt->error );

    }

    $conn->close();
    $stmt->close();


?>