<?php require_once 'functions.php' ;
    add();
?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Cadastrar Apartamento</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="add_ap.php" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id_ap">Código:</label>
                    <input type="text" readonly="true" class="form-control" name="apartamento['id']" value="">
                </div>
                <div class="form-group col-xs-6">
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="apartamento['descricao']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-3 ">
                    <label for="quant_quartos">Quantidade de Quartos:</label>

                    <input type="text" name="apartamento['quant_quartos']" value="" class="form-control">


                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-2">
                    <label for="exampleFormControlSelect1">Tipo:</label>
                    <select class="form-control" id="" name="apartamento['tipo']">
                        <option value="Suíte">Suíte</option>
                        <option value="Solteiro">Solteiro</option>

                    </select>
                </div>
                <div class="form-group col-xs-2">
                    <label for="capacidade">Capacidade:</label>
                    <input type="text" name="apartamento['capacidade']" value="" class="form-control">
                </div>

                <div class="form-group col-xs-2">
                    <label for="valor_diaria">Valor Diária:</label>
                    <input type="text" name="apartamento['valor_diaria']" value="" class="form-control">
                </div>

            </div>



            <div class="row">
                <div class="col-xs-4 pull-right text-right">
                    <button type="submit"  class="btn btn-primary botao">Salvar</button>
                    <a href="gerenciar_ap.php" class="btn btn-default botao  ">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<?php include(FOOTER_TEMPLATE); ?>
