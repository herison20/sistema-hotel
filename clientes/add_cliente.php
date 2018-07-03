<?php require_once 'functions.php' ;
    add();
?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Cadastrar Cliente</h2>
        <hr>
    </div>

    <div class="container bloco">
        <form action="add_cliente.php" method="post">

            <div class="row">
                <br>
                <div class="form-group col-xs-2">
                    <label for="id">Código:</label>
                    <input type="text" readonly="true"  class="form-control" name="cliente['id']" value="">
                </div>
                <div class="form-group col-xs-8">
                    <label for="nome">Nome:</label>
                    <input type="text" name="cliente['nome']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-2 ">
                    <label for="data_nasc">Data de Nascimento:</label>

                    <input type="text" name="data_nasc" value="" class="form-control">


                </div>
            </div>

            <div class="row">

                <!--<div class="form-group col-xs-2">
                    <label for="rua">Rua:</label>
                    <input type="text" name="cliente['rua']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-4">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="cliente['bairro']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-2">
                    <label for="numero">Número:</label>
                    <input type="text" name="cliente['numero]" value="" class="form-control">
                </div>!-->
                <div class="form-group col-xs-2">
                    <label for="sexo">Sexo:</label>
                    <input type="text" name="cliente['sexo']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-2">
                    <label for="fone">Fone:</label>
                    <input type="text" name="cliente['fone']" value="" class="form-control">
                </div>
            </div>

            <div class="row">

                <div class="form-group col-xs-4">
                    <label for="email">Email:</label>
                    <input type="email" name="cliente['email']" value="" class="form-control">
                </div>
                <div class="form-group col-xs-3">
                    <label for="senha">Senha:</label>
                    <input type="password" name="cliente['senha']" value="" class="form-control">
                </div>


            </div>



            <div class="row">
                <div class="col-xs-4 pull-right text-right">
                    <button type="submit"  class="btn btn-primary botao">Salvar</button>
                    <a href="gerenciar_cliente.php" class="btn btn-default botao  ">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<?php include(FOOTER_TEMPLATE); ?>
