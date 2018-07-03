<?php
  require_once('../config.php');
  require_once(DBAPI);
  $apartamentos = null;
  $apartamento= null;


/**    *  Listagem de Clientes     */
function index() {
  global $apartamentos;
  $apartamentos = find_all('apartamentos');
}


function add() {
  if (!empty($_POST['apartamento'])) {



    $apartamento = $_POST['apartamento'];



    save('apartamentos', $apartamento);
    header('location: gerenciar_ap.php');
  }
}

function view($id = null){
    global $apartamento;
    $apartamento = find('apartamentos', $id);

}

function edit(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['apartamento'])) {




            $apartamento = $_POST['apartamento'];



            update('apartamentos', $id, $apartamento);
            header('location: gerenciar_ap.php');
        }else {
            global $apartamento;
            $apartamento = find('apartamentos', $id);
        }
    }else {
        header('location: gerenciar_ap.php');
    }
}
/**
*  Exclusão de um Cliente
*/
function delete($id = null) {
    global $apartamento;
    $apartamento = remove('apartamentos',$id);
    header('location: gerenciar_ap.php');
}
