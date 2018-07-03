
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
        <form action="comprar_passeio.php" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-6 ">
                    <label for="id_cliente">Cliente:</label>
                    <select class="form-control" name="compra[id_cliente]">

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
                    <select class="form-control" name="compra[id_passeio]">

                        <?php if ($passeios) : ?>
                            <?php foreach ($passeios as $passeio) : ?>
                                <option value="<?php  echo $passeio['id'];?>"><?php echo 'ID: '. $passeio['id'],'- Local: '. $passeio['local_passeio'],' - Data: '. date("d/m/Y", strtotime($passeio['data'])),' - Valor: '. 'R$ ' . number_format($passeio['valor'], 2, ',', '.');?></option>
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
