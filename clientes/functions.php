<?php
  require_once('../config.php');
  require_once(DBAPI);
  $clientes = null;
  $cliente= null;


/**		 *  Listagem de Clientes		 */
function index() {
  global $clientes;
  $clientes = find_all('clientes');
}






function add() {
  if (!empty($_POST['cliente'])) {

    $data=$_POST['data_nasc'];//RECEBE O FORMATO BR DA DATA
    $nova_data=implode("-", array_reverse(explode("/", $data)));//CONVERTE EM DATA AMERICANA

    $cliente = $_POST['cliente'];

    $cliente['data_nasc']=$nova_data;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

    save('clientes', $cliente);
    header('location: gerenciar_cliente.php');
  }
}

function view($id = null){
    global $cliente;
    $cliente = find('clientes', $id);

}

function edit(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['cliente'])) {

            $data=$_POST['data_nasc'];//RECEBE O FORMATO BR DA DATA
            $nova_data=implode("-", array_reverse(explode("/", $data)));//CONVERTE EM DATA AMERICANA

            $cliente = $_POST['cliente'];

            $cliente['data_nasc']=$nova_data;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

            update('clientes', $id, $cliente);
            header('location: gerenciar_cliente.php');
        }else {
            global $cliente;
            $cliente = find('clientes', $id);
        }
    }else {
        header('location: gerenciar_cliente.php');
    }
}
/**
*  Exclusão de um Cliente
*/
function delete($id = null) {
    global $cliente;
    $cliente = remove('clientes',$id);
    header('location: gerenciar_cliente.php');
}
