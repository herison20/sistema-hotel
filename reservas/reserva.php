<?php
require_once('functions.php');
 if (isset($_GET['id'])){
    efetivar_reserva($_GET['id']);
} else {
    die("ERRO: ID não definido.");
}
?>
