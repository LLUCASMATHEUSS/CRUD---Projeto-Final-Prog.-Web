<?php
    session_start();
    @require('conectar.php');
    $id = $_SESSION['sid'];
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    try {
        $upd = $conx->prepare("UPDATE $db.$tb SET nome = ?, email = ?, data = current_timestamp WHERE id = ?");
        $upd->bindParam(1, $nome);
        $upd->bindParam(2, $email);
        $upd->bindParam(3, $id);
        $upd->execute();
        header("Location: .\listar.php");
    }
    catch(PDOException $e) {
        $msgErr =  $upd . "Falha na atualização... " . $e->getMessage();
        header("Location: .\listar.php");
    } 
  $conx = null;
?>