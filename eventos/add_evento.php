<?php require_once 'functions.php' ;
    add();
?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Cadastrar Evento</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="add_evento.php" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id">Código:</label>
                    <input type="text"  class="form-control" name="evento['id']" value="">
                </div>
                <div class="form-group col-xs-7">
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="evento['descricao']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-3 ">
                    <label for="data">Data:</label>

                    <input type="text" name="data" value="" class="form-control">


                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-3 ">
                    <label for="hora_inicio">Inicio:</label>

                    <input type="text" name="evento['hora_inicio']" value="" class="form-control">


                </div>

                <div class="form-group col-xs-4 ">
                    <label for="Local">Local:</label>

                    <input type="text" name="evento['local']" value="" class="form-control">


                </div>



                <div class="form-group col-xs-3">
                    <label for="valor">Valor:</label>
                    <input type="text" name="evento['valor']" value="" class="form-control">
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
