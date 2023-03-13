<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include('requires/functions.php'); 
        if(end($file___) != 'login.php'){
            include('requires/verifica.php'); 
        }
        include('requires/conexao.php');
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TCC | Área ADM </title>
        <link rel="stylesheet" type="text/css" href="../assets/css/main-adm.css">
    </head>
    <body>
        
    <?php
        // dados da loja
        $sqlLoja = "SELECT * FROM restaurante";
        $dadosLoja = $conexao->query($sqlLoja);
        $rowLoja = $dadosLoja->fetch_assoc();
    ?>
