<?php
    require_once ('functions.php') ;
    edit();
?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Editar Movimentação</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="edit.php?id=<?php echo $cardapio['id']; ?>" method="post">
            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id">Código:</label>
                    <input type="text"  class="form-control" name="cardapio['id']" value="<?php echo $cardapio['id']; ?>">
                </div>
                <div class="form-group col-xs-6">
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="cardapio['descricao']" value="<?php echo $cardapio['descricao']; ?>" class="form-control">
                </div>
                <div class="form-group col-xs-3">
                    <label for="tipo">Tipo:</label>
                    <select class="form-control" id=""  name="cardapio['tipo']">
                        <option value="Café da Manhã">Café da Manhã</option>
                        <option value="Almoço">Almoço</option>
                        <option value="Janta">Janta</option>
                        <option value="Entrada e Porção">Entrada e Porçõe</option>
                    </select>
                </div>

            </div>

            <div class="row">


                <div class="form-group col-xs-2">
                    <label for="valor">Valor:</label>
                    <input type="text" name="cardapio['valor']" value="<?php echo $cardapio['id'];?>" class="form-control">
                </div>

            </div>



            <div class="row">
                <div class="col-xs-4 pull-right text-right">
                    <button type="submit"  class="btn btn-primary botao">Salvar</button>
                    <a href="gerenciar_cardapio.php" class="btn btn-default botao">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<?php include(FOOTER_TEMPLATE); ?>
