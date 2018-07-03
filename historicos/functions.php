<?php
  require_once('../config.php');
  require_once(DBAPI);
  $clientes = null;
  $cliente= null;
  $pacotes= null;
  $pacote= null;
  $passeios= null;
  $passeio= null;


/**		 *  Listagem de Clientes		 */
function index() {
  global $clientes;
  $clientes = find_all('clientes');
}
function index2() {
  global $clientes;
  $clientes = join_historico($id=null);
}

function view($id = null){
    global $clientes;
    global $pacotes;
    global $passeios;
    $clientes = join_historico($id);
    $pacotes = join_historico_pacote($id);
    $passeios = join_historico_passeio($id);

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
