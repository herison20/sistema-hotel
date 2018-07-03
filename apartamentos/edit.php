<?php
    require_once ('functions.php') ;
    edit();
?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Editar Apartamento</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="edit.php?id=<?php echo $apartamento['id']; ?>" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id">Id:</label>
                    <input type="text" readonly="true" class="form-control" name="apartamento['id']" value="<?php echo $apartamento['id']; ?>">
                </div>
                <div class="form-group col-xs-8">
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="apartamento['descricao']" value="<?php echo $apartamento['descricao'];?>" class="form-control">
                </div>

            </div>

            <div class="row">
                <div class="form-group col-xs-2">
                    <label for="capacidade">Capacidade: </label>
                    <input type="text" name="apartamento['capacidade']" value="<?php echo $apartamento['capacidade']; ?>" class="form-control">
                </div>
                <div class="form-group col-xs-2">
                    <label for="tipo">Tipo: </label>
                    <input type="text" name="apartamento['tipo']" value="<?php echo $apartamento['tipo']; ?>" class="form-control">
                </div>
                <div class="form-group col-xs-6">
                    <label for="quant_quartos">Quant. Quartos:</label>
                    <input type="text" name="apartamento['quant_quartos']" value="<?php echo $apartamento['quant_quartos']; ?>" class="form-control">
                </div>
                <div class="form-group col-xs-2">
                    <label for="tipo">Valor Diária: </label>
                    <input type="text" name="apartamento['valor_diaria']" value="<?php echo $apartamento['valor_diaria']; ?>" class="form-control">
                </div>
            </div>



            <div class="row">
                <div class="col-xs-4 pull-right text-right">
                    <button type="submit"  class="btn btn-primary botao">Salvar</button>
                    <a href="gerenciar_ap.php" class="btn btn-default botao ">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<?php include(FOOTER_TEMPLATE); ?>
