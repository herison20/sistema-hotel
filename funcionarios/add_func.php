<?php require_once 'functions.php' ;
    add_func();
?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Cadastrar Funcionário</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="add_func.php" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id">Matrícula:</label>
                    <input type="text" readonly="true" class="form-control" name="funcionario['id']" value="">
                </div>
                <div class="form-group col-xs-8">
                    <label for="name">Nome:</label>
                    <input type="text" name="funcionario['nome']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-2 ">
                    <label for="data_admissao">Data de Admissão:</label>

                    <input type="text" name="data_admissao" value="" class="form-control">


                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-4">
                    <label for="exampleFormControlSelect1">Tipo de Funcionário:</label>
                    <select class="form-control" id="" name="funcionario['tipo_func']">
                        <option value="Guia">Guia</option>
                        <option value="Gerente">Gerente</option>
                        <option value="Recepcionista">Recepcionista</option>
                        <option value="Traslado">Traslado</option>
                    </select>
                </div>
                <div class="form-group col-xs-2">
                    <label for="description">Rua:</label>
                    <input type="text" name="cliente['description']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-4">
                    <label for="description">Bairro:</label>
                    <input type="text" name="cliente['description']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-2">
                    <label for="description">Número:</label>
                    <input type="text" name="cliente['description']" value="" class="form-control">
                </div>
            </div>



            <div class="row">
                <div class="col-xs-4 pull-right text-right">
                    <button type="submit"  class="btn btn-primary botao">Salvar</button>
                    <a href="gerenciar_func.php" class="btn btn-default botao  ">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<?php include(FOOTER_TEMPLATE); ?>
