<?php

$banco = false;
function GetBanco() {
    global $banco;
    $ambiente = substr($_SERVER['HTTP_HOST'],  0, 1); 
    if( $banco )
       return $banco;
       if($ambiente == 'l') {
            $banco = new mysqli('localhost', 'root', '', 'db_agilizae');
        } else {
            // $banco = new mysqli('mysql.projetospitico.kinghost.net', 'projetospitico18', 'crmpitico11', 'projetospitico18');
        }

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    mysqli_set_charset( $banco, 'utf8');
    return $banco;
}

function CloseBanco() {
    global $banco;
    if( $banco != false )
        mysqli_close($banco);
    $banco = false;
}

$conexao=GetBanco(); 
