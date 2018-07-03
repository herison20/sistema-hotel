<?php
    // CONECTA AO BANCO DE DADOS
    function open_database(){
        try{
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            return $conn;
        }catch(Exception $e){
            echo $e->getMessage();
            return null;
        }

    }
    // FECHA A CONEXÃO COM O BANCO DE DADOS
    function close_database($conn){
        try{
            mysqli_close($conn);
        }catch(Exception $e){
            echo $e->getMessage();

        }

    }

    /**
    *  Insere um registro no BD
    */
    function save($table = null, $data = null) {
        $database = open_database();
        $columns = null;
        $values = null;
        //print_r($data);
        foreach ($data as $key => $value) {
            $columns .= trim($key, "'") . ",";
            $values .= "'$value',";
        }

        // REMOVE A ÚLTIMA VÍRGULA
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');

        $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
        try {
            $database->query($sql);
            $_SESSION['message'] = 'Registro cadastrado com sucesso.';
            $_SESSION['type'] = 'success';
        } catch (Exception $e) {
            $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
    }

  /**		 *  PESQUISA UM REGISTRO PELO ID EM UMA TABELA		 */
    function find( $table = null, $id = null ) {
        $database = open_database();
        $found = null;
        try {
            if ($id) {
                $sql = "SELECT * FROM " . $table . " WHERE id= " . $id;
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_assoc();
                }
            } else {
                $sql = "SELECT * FROM " . $table;
                $result = $database->query($sql);
                if ($result->num_rows > 0) {

                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
            }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }

    function find_guias( $table = null) {
        $database = open_database();
        $found = null;
        try {
                $sql = "SELECT * FROM " . $table . " WHERE tipo_func='Guia' ";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }

    function find_traslados( $table = null) {
        $database = open_database();
        $found = null;
        try {
                $sql = "SELECT * FROM " . $table . " WHERE tipo_func='Traslado' ";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }

    function find_clientes( $table = null) {
        $database = open_database();
        $found = null;
        try {
                $sql = "SELECT * FROM " . $table ;
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }

    function find_apartamentos( $table = null) {
        $database = open_database();
        $found = null;
        try {
                $sql = "SELECT * FROM " . $table ;
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }

    function find_funcionarios( $table = null) {
        $database = open_database();
        $found = null;
        try {
                $sql = "SELECT id, nome FROM funcionarios WHERE tipo_func LIKE 'Recepcionista' OR tipo_func LIKE 'Gerente'";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }


    function join_pacotes($id=null) {
        $database = open_database();
        $found = null;
        try{

            if ($id) {
                $sql = "SELECT pacotes.*, local_passeio, descricao FROM pacotes INNER JOIN apartamentos INNER JOIN passeios ON pacotes.id=" . $id ." AND pacotes.id_ap=apartamentos.id AND pacotes.id_passeio = passeios.id ";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_assoc();
                }
            } else {
                $sql = "SELECT pacotes.*, local_passeio, descricao FROM pacotes INNER JOIN apartamentos INNER JOIN passeios ON pacotes.id_ap = apartamentos.id AND pacotes.id_passeio = passeios.id ORDER BY pacotes.id ASC";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {

                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
            }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }

    function join_passeios($id=null) {
        $database = open_database();
        $found = null;
        try{
            if ($id) {
                $sql = "SELECT passeios.*, nome FROM passeios INNER JOIN funcionarios ON passeios.id=" . $id ." AND passeios.matricula_guia=funcionarios.id";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_assoc();
                }
            } else {
                $sql = "SELECT passeios.*, nome FROM passeios INNER JOIN funcionarios ON passeios.matricula_guia=funcionarios.id ORDER BY passeios.id ASC";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {

                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
            }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }


    function join_reservas($id=null) {
        $database = open_database();
        $found = null;
        try{
            if ($id) {
                $sql = "SELECT reservas.*, clientes.nome AS nome_cliente, apartamentos.descricao AS descricao_ap, funcionarios.nome AS nome_func, apartamentos.valor_diaria AS valorD FROM reservas INNER JOIN clientes INNER JOIN apartamentos INNER JOIN funcionarios ON reservas.id_cliente=" . $id ." AND reservas.id_cliente=clientes.id AND reservas.id_ap=apartamentos.id AND reservas.matricula_func=funcionarios.id";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {
                    $found = $result->fetch_assoc();
                }
            } else {
                $sql = "SELECT reservas.*, clientes.nome AS nome_cliente, apartamentos.descricao AS descricao_ap, funcionarios.nome AS nome_func, apartamentos.valor_diaria AS valorD FROM reservas INNER JOIN clientes INNER JOIN apartamentos INNER JOIN funcionarios ON reservas.id_cliente=clientes.id AND reservas.id_ap=apartamentos.id AND reservas.matricula_func=funcionarios.id ORDER BY reservas.id ASC";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {

                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }
            }
        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }


    function join_historico($id) {
        $database = open_database();
        $found = null;
        try{


                $sql = "SELECT reservas.*, clientes.*, apartamentos.descricao AS descricao_ap, funcionarios.nome AS nome_func, apartamentos.valor_diaria AS valorD FROM reservas INNER JOIN clientes INNER JOIN apartamentos INNER JOIN funcionarios ON reservas.id_cliente=" . $id ." AND reservas.id_cliente=clientes.id AND reservas.id_ap=apartamentos.id AND reservas.matricula_func=funcionarios.id";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {

                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }

        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }

    function join_historico_pacote($id) {
        $database = open_database();
        $found = null;
        try{


                $sql = "SELECT vendas.*, pacotes.*, passeios.*, clientes.* FROM vendas INNER JOIN clientes INNER JOIN pacotes INNER JOIN passeios ON vendas.id_cliente=" . $id ." AND vendas.id_pacote=pacotes.id AND vendas.id_passeio=passeios.id";
                $result = $database->query($sql);
                if ($result->num_rows > 0) {

                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }

        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }
    function join_historico_passeio($id) {
        $database = open_database();
        $found = null;
        try{


                $sql = "SELECT vendas.*, clientes.nome, clientes.id, passeios.* FROM vendas INNER JOIN passeios INNER JOIN clientes ON vendas.id_cliente=" . $id ." AND vendas.id_passeio=passeios.id AND clientes.id=" . $id;
                $result = $database->query($sql);
                if ($result->num_rows > 0) {

                    $found = $result->fetch_all(MYSQLI_ASSOC);
                }

        }catch(Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
    }


/**		 *  Pesquisa Todos os Registros de uma Tabela		 */
    function find_all( $table ) {
        return find($table);
    }


    /**
     * Atualiza um registro em uma tabela, por ID
     */
    function update($table = null, $id = null, $data = null){
        $database = open_database();
        $items = null;
        foreach ($data as $key => $value) {
            $items .= trim($key, "'") . "='$value',";
        }
        // remove a ultima virgula
        $items = rtrim($items, ',');
        $sql  = "UPDATE " . $table;
        $sql .= " SET $items ";
        $sql .= " WHERE id=" . $id . ";";
        try {		    $database->query($sql);
            $_SESSION['message'] = 'Registro atualizado com sucesso.';
            $_SESSION['type'] = 'success';
        } catch (Exception $e) {
            $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
            $_SESSION['type'] = 'danger';
        }
            close_database($database);
    }




 function efetivar($id = null, $valor = null){
        $database = open_database();


        // remove a ultima virgula

        $sql  = "UPDATE reservas SET valor=" .$valor. ", status='Sim' WHERE id=" .$id;


        try {           $database->query($sql);
            $_SESSION['message'] = 'Registro atualizado com sucesso.';
            $_SESSION['type'] = 'success';
        } catch (Exception $e) {
            $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
            $_SESSION['type'] = 'danger';
        }
            close_database($database);
    }
    /**
    *  Remove uma linha de uma tabela pelo ID do registro
    */
    function remove( $table = null, $id = null ) {
        $database = open_database();
        try {
            if ($id) {
                $sql = "DELETE FROM " . $table . " WHERE id=" . $id;
                $result = $database->query($sql);
                if ($result = $database->query($sql)) {
                    $_SESSION['message'] = "Registro Removido com Sucesso.";
                    $_SESSION['type'] = 'success';
                }
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
    }






    /**		 *  PESQUISA UM REGISTRO PELO DATA EM UMA TABELA		 */

?>
