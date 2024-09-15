<?php
    session_start();
    @require('conectar.php');
    $id = $_GET['varid'];
        try{
            $del = $conx->prepare("DELETE FROM $db.$tb WHERE id = ?");
            $del->bindParam(1, $id);
            $del->execute();
            $msgErr =  "Registro excluído com sucesso! " . $del->rowCount();
            header("Location: .\listar.php");
        }
        catch(PDOException $e){
            $msg = $del . " - " . $e->getMessage();
            header("Location: .\listar.php");
        }
        $conx = null; 
 ?>