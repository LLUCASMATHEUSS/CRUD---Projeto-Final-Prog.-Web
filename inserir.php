<?php
    session_start();
    @require('conectar.php');
    $bt = filter_input(INPUT_POST, 'Cadastrar', FILTER_SANITIZE_STRING);
    if($bt){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        try {
            $ins = $conx->prepare("INSERT INTO $db.$tb  (nome, email) VALUES (?, ?)");
            $ins->bindParam(1, $nome);
            $ins->bindParam(2, $email);
            $ins->execute();
            header("Location: .\index.php");             
        }
        catch(PDOException $e) {
            $msgErr = $ins . "Erro na inclusão:<br />" . $e->getMessage();
            $_SESSION['msgErr'] = $msgErr;
            header("Location: .\index.php");
        }
    }
