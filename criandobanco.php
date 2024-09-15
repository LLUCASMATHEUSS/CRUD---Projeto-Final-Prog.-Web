<?php
    @require ("preparandoconexao.php");
    try {
        $conx = new PDO("mysql:host=$host", $user, $pass);   
        $conx->setAttribute(PDO::ATTR.ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $criadb = "CREATE DATABASE $db";
        $conx->exec($criadb);
    }
    catch(PDOException $e) {
        echo $criadb . "Falha na criação do DB:<br />" . $e->getMessage();
    }  
    try {	
        $criatb = "CREATE TABLE $db.$tb (
        `id` INT NOT NULL UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        `nome` VARCHAR(100) NOT NULL,
        `email` VARCHAR(100) NOT NULL,
        `data` DATE NOT NULL CURRENT_TIMESTAMP)";
        $conx->exec($criatb);
    } 
    catch(PDOException $e) {
        echo $criatb ."Falha Tabela:<br>". $e->getMessage(); 
    }  
?>