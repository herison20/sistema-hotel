<?php
  require_once('../config.php');
  require_once(DBAPI);
  $pacotes = null;
  $pacote  = null;
  $passeios = null;
  $passeio  = null;
  $apartamentos = null;
  $apartamento  = null;
  $clientes = null;
  $cliente  = null;



/**		 *  Listagem de Clientes		 */
function index() {
  global $pacotes;
  $pacotes = join_pacotes();
}
function index_add() {
  global $apartamentos;
  $apartamentos = find_all('apartamentos');
  global $passeios;
  $passeios = find_all('passeios');
  global $clientes;
  $clientes = find_all('clientes');
}



function add_compra() {
  if (!empty($_POST['pacote'])) {



    $pacote = $_POST['pacote'];


    save('vendas', $pacote);
    header('location: gerenciar_pacote.php');
  }
}
function add() {
  if (!empty($_POST['pacote'])) {



    $pacote = $_POST['pacote'];


    save('pacotes', $pacote);
    header('location: gerenciar_pacote.php');
  }
}

function view($id = null){
    global $pacote;
    $pacote = join_pacotes($id);

}


function edit(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['pacote'])) {



            $pacote = $_POST['pacote'];



            update('pacotes', $id, $pacote);
            header('location: gerenciar_pacote.php');
        }else {
            global $pacote;
            $pacote = find('pacotes', $id);
        }
    }else {
        header('location: gerenciar_pacote.php');
    }
}
/**
*  Exclusão de um Cliente
*/
function delete($id = null) {
    global $pacote;
    $pacote = remove('pacotes',$id);
    header('location: gerenciar_pacote.php');
}
