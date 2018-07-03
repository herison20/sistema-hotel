<?php
  require_once('../config.php');
  require_once(DBAPI);
  $cardapios = null;
  $cardapio  = null;


/**		 *  Listagem de Clientes		 */
function index() {
  global $cardapios;
  $cardapios = find_all('cardapios');
}





function add() {
  if (!empty($_POST['cardapio'])) {



    $cardapio = $_POST['cardapio'];



    save('cardapios', $cardapio);
    header('location: gerenciar_cardapio.php');
  }
}

function view($id = null){
    global $cardapio;
    $cardapio = find('cardapios', $id);

}

function edit(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['cardapio'])) {


            $cardapio = $_POST['cardapio'];



            update('cardapios', $id, $cardapio);
            header('location: gerenciar_cardapio.php');
        }else {
            global $cardapio;
            $cardapio = find('cardapios', $id);
        }
    }else {
        header('location: gerenciar_cardapio.php');
    }
}
/**
*  Exclusão de um Cliente
*/
function delete($id = null) {
    global $cardapio;
    $cardapio = remove('cardapios',$id);
    header('location: gerenciar_cardapio.php');
}
