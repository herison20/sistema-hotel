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
        <form action="add_reserva.php" method="post">

            <div class="row">
                <br>
                

                <div class="form-group col-xs-6 ">
                    <label for="id_cliente">Cliente:</label>
                    <select class="form-control" name="reserva[id_cliente]">

                        <?php if ($clientes) : ?>
                            <?php foreach ($clientes as $cliente) : ?>
                                <option value="<?php  echo $cliente['id'];?>"><?php echo $cliente['nome'];?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
                </div>





                <div class="form-group col-xs-6 ">
                    <label for="id_ap">Apartamento/Valor Diária:</label>
                    <select class="form-control" name="reserva[id_ap]">

                        <?php if ($apartamentos) : ?>
                            <?php foreach ($apartamentos as $apartamento) : ?>
                                <option value="<?php  echo $apartamento['id'];?>"><?php echo $apartamento['descricao'],' - R$ '.$apartamento['valor_diaria'];?></option>
                            <?php endforeach; ?>

                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
                </div>
            </div>






            <div class="row">
               
            

                <div class="form-group col-xs-8">
                    <label for="matricula_func">Funcionário:</label>
                    <select class="form-control" name="reserva[matricula_func]">

                        <?php if ($funcionarios) : ?>
                            <?php foreach ($funcionarios as $funcionario) : ?>
                                <option value="<?php  echo $funcionario['id'];?>"><?php echo $funcionario['nome'];?></option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Nenhum registro encontrado.</p>
                        <?php endif; ?>
                    </select>
                </div>

                 <div class="form-group col-xs-4">
                    <label for="data_reserva">Data da Reserva:</label>
                    <input type="text" name="data_reserva" value="" class="form-control">
                </div>

            </div>





            <div class="row">

                <div class="form-group col-xs-3">
                    <label for="inicio_hospedagem">Inicio da Hospedagem:</label>
                    <input type="text" name="inicio_hospedagem" value="" class="form-control">
                </div>

                <div class="form-group col-xs-3">
                    <label for="fim_hospedagem">Fim da Hospedagem:</label>
                    <input type="text" name="fim_hospedagem" value="" class="form-control">
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
