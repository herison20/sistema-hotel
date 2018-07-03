
<?php require_once 'functions.php' ;
add_compra();

index();
index_add();







?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Comprar Pacote</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="comprar_pacote.php" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-6 ">
                    <label for="id_cliente">Cliente:</label>
                    <select class="form-control" name="pacote[id_cliente]">

                        <?php if ($clientes) : ?>
                            <?php foreach ($clientes as $cliente) : ?>
                                <option value="<?php  echo $cliente['id'];?>"><?php echo $cliente['nome'];?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group col-xs-12 ">
                    <label for="id_ap">Pacote: (ID/APARTAMENTO/PASSEIO/VALOR)</label>
                    <select class="form-control" name="pacote[id_pacote]">

                        <?php if ($pacotes) : ?>
                            <?php foreach ($pacotes as $pacote) : ?>
                                <option value="<?php  echo $pacote['id'];?>"><?php echo 'ID: '. $pacote['id'],'/ "AP:'. $pacote['descricao'],'/ Passeio: '. $pacote['local_passeio'],'/ Valor: '. 'R$ ' . number_format($pacote['valor_pacote'], 2, ',', '.');?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
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
