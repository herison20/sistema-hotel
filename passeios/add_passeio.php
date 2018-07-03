<?php require_once 'functions.php' ;
    add();
    index_add();
?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Cadastrar Passeio</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="add_passeio.php" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id">Código:</label>
                    <input type="text"  class="form-control" name="passeio['id']" value="">
                </div>

                <div class="form-group col-xs-6 ">
                    <label for="matricula_guia">Guia:</label>
                    <select class="form-control" name="passeio[matricula_guia]">

                        <?php if ($guias) : ?>
                            <?php foreach ($guias as $guia) : ?>
                                <option value="<?php  echo $guia['id'];?>"><?php echo $guia['nome'];?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
                </div>





                <div class="form-group col-xs-3 ">
                    <label for="matricula_translado">Traslado:</label>
                    <select class="form-control" name="passeio[matricula_translado]">

                        <?php if ($traslados) : ?>
                            <?php foreach ($traslados as $traslado) : ?>
                                <option value="<?php  echo $traslado['id'];?>"><?php echo $traslado['nome'];?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-2">
                    <label for="tipo_transporte">Tipo Transporte:</label>
                    <input type="text" name="passeio['tipo_transporte']" value="" class="form-control">
                </div>

                <div class="form-group col-xs-2">
                    <label for="data">Data:</label>
                    <input type="text" name="data" value="" class="form-control">
                </div>
                <div class="form-group col-xs-2">
                    <label for="hora_inicio">Inicio:</label>
                    <input type="text" name="passeio['hora_inicio']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-2">
                    <label for="description">Termino:</label>
                    <input type="text" name="passeio['hora_termino']" value="" class="form-control">
                </div>



                <div class="form-group col-xs-2">
                    <label for="valor">Valor:</label>
                    <input type="text" name="passeio['valor']" value="" class="form-control">
                </div>

            </div>

            <div class="row">
                <div class="form-group col-xs-10">
                    <label for="local_passeio">Local:</label>
                    <input type="text" name="passeio['local_passeio']" value="" class="form-control">
                </div>
            </div>


            <div class="row">
                <div class="col-xs-4 pull-right text-right">
                    <button type="submit"  class="btn btn-primary botao">Salvar</button>
                    <a href="gerenciar_passeio.php" class="btn btn-default botao  ">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<?php include(FOOTER_TEMPLATE); ?>
