<?php
  require_once('../config.php');
  require_once(DBAPI);
  $funcionarios = null;
  $funcionario  = null;


/**		 *  Listagem de Clientes		 */
function index() {
  global $funcionarios;
  $funcionarios = find_all('funcionarios');
}





function add_func() {
  if (!empty($_POST['funcionario'])) {

    $data=$_POST['data_admissao'];//RECEBE O FORMATO BR DA DATA
    $nova_data=implode("-", array_reverse(explode("/", $data)));//CONVERTE EM DATA AMERICANA

    $funcionario = $_POST['funcionario'];

    $funcionario['data_admissao']=$nova_data;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

    save('funcionarios', $funcionario);
    header('location: gerenciar_func.php');
  }
}

function view($id = null){
    global $funcionario;
    $funcionario = find('funcionarios', $id);

}

function edit(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['funcionario'])) {

            $data=$_POST['data_admissao'];//RECEBE O FORMATO BR DA DATA
            $nova_data=implode("-", array_reverse(explode("/", $data)));//CONVERTE EM DATA AMERICANA

            $funcionario = $_POST['funcionario'];

            $funcionario['data_admissao']=$nova_data;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

            update('funcionarios', $id, $funcionario);
            header('location: gerenciar_func.php');
        }else {
            global $funcionario;
            $funcionario = find('funcionarios', $id);
        }
    }else {
        header('location: gerenciar_func.php');
    }
}
/**
*  Exclusão de um Cliente
*/
function delete($id = null) {
    global $funcionario;
    $funcionario = remove('funcionarios', $id);
    header('location: gerenciar_func.php');
}
