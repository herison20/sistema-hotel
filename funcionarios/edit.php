<?php
    require_once ('functions.php') ;
    edit();

?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Editar Pacote</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="edit.php?id=<?php echo $funcionario['id']; ?>" method="post">
            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id">Matrícula:</label>
                    <input type="text"  class="form-control" readonly="true" name="funcionario['id']" value="<?php echo $funcionario['id']; ?>">
                </div>
                <div class="form-group col-xs-8">
                    <label for="name">Nome:</label>
                    <input type="text" name="funcionario['nome']" value="<?php echo $funcionario['nome']; ?>" class="form-control">
                </div>
                <div class="form-group col-xs-2 ">
                    <label for="data_admissao">Data de Admissão:</label>

                    <input type="text" name="data_admissao" value="<?php echo date("d/m/Y", strtotime($funcionario['data_admissao'])); ?>" class="form-control">


                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-4">
                    <label for="tipo_func">Tipo de Funcionário:</label>
                    <input type="text" name="funcionario['tipo_func']" value="<?php echo $funcionario['tipo_func']; ?>" class="form-control">
                </div>
                <!--<div class="form-group col-xs-2">
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
                </div>-->
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
