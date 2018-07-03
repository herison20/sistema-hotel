<?php
  require_once('../config.php');
  require_once(DBAPI);
  $reservas     = null;
  $reserva      = null;
  $clientes     = null;
  $cliente      = null;
  $apartamentos = null;
  $apartamento  = null;
  $funcionarios = null;
  $funcionario  = null;




/**		 *  Listagem de Clientes		 */
function index() {
  global $clientes;
  $clientes = join_reservas();
  
}

function index_add() {
  global $clientes;
  $clientes = find_clientes('clientes');
  global $apartamentos;
  $apartamentos = find_apartamentos('apartamentos');
  global $funcionarios;
  $funcionarios = find_funcionarios('funcionarios');

}

function add() {
  if (!empty($_POST['reserva'])) {

    $data1=$_POST['inicio_hospedagem'];//RECEBE O FORMATO BR DA DATA
    $data2=$_POST['fim_hospedagem'];//RECEBE O FORMATO BR DA DATA
    $data3=$_POST['data_reserva'];//RECEBE O FORMATO BR DA DATA
    $nova_data1=implode("-", array_reverse(explode("/", $data1)));//CONVERTE EM DATA AMERICANA
    $nova_data2=implode("-", array_reverse(explode("/", $data2)));//CONVERTE EM DATA AMERICANA
    $nova_data3=implode("-", array_reverse(explode("/", $data3)));//CONVERTE EM DATA AMERICANA

    $reserva = $_POST['reserva'];

    $reserva['inicio_hospedagem']=$nova_data1;//É ADICIONADO NO ARRAY QUE VAI PARA O BD
    $reserva['fim_hospedagem']=$nova_data2;//É ADICIONADO NO ARRAY QUE VAI PARA O BD
    $reserva['data_reserva']=$nova_data3;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

    save('reservas', $reserva);
    header('location: gerenciar_reserva.php');
  }
}

function view($id = null){
    global $reserva;
    $reserva = join_reservas($id);

}

function edit(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['reservas'])) {

            $data1=$_POST['inicio_hospedagem'];//RECEBE O FORMATO BR DA DATA
            $data2=$_POST['fim_hospedagem'];//RECEBE O FORMATO BR DA DATA
            $data3=$_POST['data_reserva'];//RECEBE O FORMATO BR DA DATA
            $nova_data1=implode("-", array_reverse(explode("/", $data1)));//CONVERTE EM DATA AMERICANA
            $nova_data2=implode("-", array_reverse(explode("/", $data2)));//CONVERTE EM DATA AMERICANA
            $nova_data3=implode("-", array_reverse(explode("/", $data3)));//CONVERTE EM DATA AMERICANA

            $reserva = $_POST['reservas'];

            $reserva['inicio_hospedagem']=$nova_data1;//É ADICIONADO NO ARRAY QUE VAI PARA O BD
            $reserva['fim_hospedagem']=$nova_data2;//É ADICIONADO NO ARRAY QUE VAI PARA O BD
            $reserva['data_reserva']=$nova_data3;//É ADICIONADO NO ARRAY QUE VAI PARA O BD

            update('reservas', $id, $reserva);
            header('location: gerenciar_reserva.php');
        }else {
            global $reserva;
            $reserva = find('reservas', $id);
        }
    }else {
        header('location: gerenciar_reserva.php');
    }
}

function efetivar_reserva(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $valor = $_GET['valor'];
        if (isset($_GET['valor'])) {

           

            $reserva = $_GET['valor'];

            
            

            efetivar($id, $reserva);
            header('location: gerenciar_reserva.php');
        
}
}
}
/**
*  Exclusão de um Cliente
*/
function delete($id = null) {
    global $reserva;
    $reserva = remove('reservas',$id);
    header('location: gerenciar_reserva.php');
}
