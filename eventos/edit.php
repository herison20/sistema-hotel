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
        <form action="edit.php?id=<?php echo $evento['id']; ?>" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id">Código:</label>
                    <input type="text"  class="form-control" name="evento['id']" value="<?php echo $evento['id']; ?>">
                </div>
                <div class="form-group col-xs-7">
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="evento['descricao']" value="<?php echo $evento['descricao']; ?>" class="form-control">
                </div>
                <div class="form-group col-xs-3 ">
                    <label for="data">Data:</label>

                    <input type="text" name="data" value="<?php echo date("d/m/Y", strtotime($evento['data'])); ?>" class="form-control">


                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-3 ">
                    <label for="hora_inicio">Inicio:</label>

                    <input type="text" name="evento['hora_inicio']" value="<?php echo $evento['hora_inicio']; ?>" class="form-control">


                </div>

                <div class="form-group col-xs-4 ">
                    <label for="Local">Local:</label>

                    <input type="text" name="evento['local']" value="<?php echo $evento['local']; ?>" class="form-control">


                </div>



                <div class="form-group col-xs-3">
                    <label for="valor">Valor:</label>
                    <input type="text" name="evento['valor']" value="<?php echo number_format($evento['valor'], 2, '.', '.'); ?>" class="form-control">
                </div>

            </div>



            <div class="row">
                <div class="col-xs-4 pull-right text-right">
                    <button type="submit"  class="btn btn-primary botao">Salvar</button>
                    <a href="gerenciar_evento.php" class="btn btn-default botao  ">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<?php include(FOOTER_TEMPLATE); ?>
