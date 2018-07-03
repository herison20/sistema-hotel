<?php
  require_once('../config.php');
  require_once(DBAPI);
  $passeios = null;
  $passeio= null;
  $traslados = null;
  $traslado= null;
  $guias = null;
  $guia= null;
  $reservas=null;
  $reserva = null;
  $clientes=null;
  $cliente = null;


/**		 *  Listagem de Clientes		 */
function index() {
  global $passeios;
  $passeios = join_passeios();
}
function index_add() {
  global $guias;
  $guias = find_guias('funcionarios');
  global $traslados;
  $traslados = find_traslados('funcionarios');
  global $clientes;
  $clientes = find_all('clientes');

  global $reservas;
  $reservas = find_all('reservas');

}

function add_compra() {
  if (!empty($_POST['compra'])) {



    $passeio = $_POST['compra'];



    save('vendas', $passeio);
    header('location: gerenciar_passeio.php');
  }
}
function add() {
  if (!empty($_POST['passeio'])) {

    $data=$_POST['data'];//RECEBE O FORMATO BR DA DATA
    $nova_data=implode("-", array_reverse(explode("/", $data)));//CONVERTE EM DATA AMERICANA

    $passeio = $_POST['passeio'];

    $passeio['data']=$nova_data;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

    save('passeios', $passeio);
    header('location: gerenciar_passeio.php');
  }
}

function view($id = null){
    global $passeio;
    $passeio = join_passeios($id);

}

function edit(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['passeio'])) {

            $data=$_POST['data'];//RECEBE O FORMATO BR DA DATA
            $nova_data=implode("-", array_reverse(explode("/", $data)));//CONVERTE EM DATA AMERICANA

            $passeio = $_POST['passeio'];

            $passeio['data']=$nova_data;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

            update('passeios', $id, $passeio);
            header('location: gerenciar_passeio.php');
        }else {
            global $passeio;
            $passeio = find('passeios', $id);
        }
    }else {
        header('location: gerenciar_passeio.php');
    }
}
/**
*  Exclusão de um Cliente
*/
function delete($id = null) {
    global $passeio;
    $passeio = remove('passeios',$id);
    header('location: gerenciar_passeio.php');
}
