<?php
  require_once('../config.php');
  require_once(DBAPI);
  $eventos = null;
  $evento  = null;


/**		 *  Listagem de Clientes		 */
function index() {
  global $eventos;
  $eventos = find_all('eventos');
}


function add() {
  if (!empty($_POST['evento'])) {

    $data=$_POST['data'];//RECEBE O FORMATO BR DA DATA
    $nova_data=implode("-", array_reverse(explode("/", $data)));//CONVERTE EM DATA AMERICANA

    $evento = $_POST['evento'];

    $evento['data']=$nova_data;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

    save('eventos', $evento);
    header('location: gerenciar_evento.php');
  }
}

function view($id = null){
    global $evento;
    $evento = find('eventos', $id);

}

function edit(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['evento'])) {

            $data=$_POST['data'];//RECEBE O FORMATO BR DA DATA
            $nova_data=implode("-", array_reverse(explode("/", $data)));//CONVERTE EM DATA AMERICANA

            $evento = $_POST['evento'];

            $evento['data']=$nova_data;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

            update('eventos', $id, $evento);
            header('location: gerenciar_evento.php');
        }else {
            global $evento;
            $evento = find('eventos', $id);
        }
    }else {
        header('location: gerenciar_evento.php');
    }
}
/**
*  Exclusão de um Cliente
*/
function delete($id = null) {
    global $evento;
    $evento = remove('eventos',$id);
    header('location: gerenciar_evento.php');
}
