<?php
    require_once ('functions.php') ;
    edit();
    index_add();
?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Editar Pacote</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="edit.php?id=<?php echo $pacote['id']; ?>" method="post">


            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="cod">Código:</label>
                    <input type="text" readonly="true" class="form-control" name="pacote['id']" value="<?php echo $pacote['id']; ?>">
                </div>

                <div class="form-group col-xs-10 ">
                    <label for="id_ap">Apartamento:</label>
                    <select class="form-control" name="pacote[id_ap]">

                        <?php if ($apartamentos) : ?>
                            <?php foreach ($apartamentos as $apartamento) : ?>
                                <option value="<?php  echo $apartamento['id'];?>"><?php echo $apartamento['descricao'];?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-xs-10 ">
                    <label for="id_passeio">Passeio:</label>
                    <select class="form-control" name="pacote[id_passeio]">
                           <?php if ($passeios) : ?>
                            <?php foreach ($passeios as $passeio) : ?>
                                <option value="<?php echo $passeio['id'];?>"><?php echo $passeio['local_passeio'];?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-xs-2 pull-right">
                    <label for="valor">Valor R$:</label>
                    <input type="text" name="pacote['valor_pacote']" value="<?php echo number_format($pacote['valor_pacote'], 2, '.', '.'); ?>" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-4 pull-right text-right">
                    <button type="submit"  class="btn btn-primary botao">Salvar</button>
                    <a href="gerenciar_pacote.php" class="btn btn-default botao  ">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<?php include(FOOTER_TEMPLATE); ?>
