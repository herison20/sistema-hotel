<?php require_once 'config.php';?>
<?php require_once DBAPI;?>
<?php
    
    $db = open_database();
    if($db){
        echo '<h1>CONECTADO AO BANDO DE DADOS COM SUCESSO!</h1>';
    }else{
        echo '<h1>NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS!</h1>';
    }
?>