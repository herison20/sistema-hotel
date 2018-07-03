<?php  require_once 'functions.php';

    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Reservas</h2>
    </div>

    <div class="col-xs-6 text-right h2">

      <a href="add_reserva.php" class="btn btn-primary botao">Reservar AP</a>



    </div>

  </div>
  <hr>
</div>

<!-- INICIO TABELA -->
<div class="container bloco">
    <table class="table table-hover table-striped table-bordered table-condensed tabled">
        <thead class="" >
            <tr class="bg-primary">
                <th width="1%">Cód. Res</th>
                <th width="3%">Cliente</th>
                <th width="20%">Apartamento</th>
                <th width="1%">Valor Diária</th>
                <th width="1%">Inicio</th>
                <th width="1%">Fim</th>
                <th width="1%">Quant. Dias</th>
                <th width="5%">Valor</th>
                <th width="5%">Efetivado?</th>
                <th width="40%">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($clientes) : ?>
                <?php foreach ($clientes as $reserva) : ?>
                    <tr>
                        <td><?php echo $reserva['id']; ?></td>
                        <td><?php echo $reserva['nome_cliente']; ?></td>
                        <td><?php echo $reserva['descricao_ap']; ?></td>
                        <td><?php echo 'R$ ' . number_format($reserva['valorD'], 2, ',', '.'); ?></td>
                        <td><?php echo date("d/m/Y", strtotime($reserva['inicio_hospedagem']));  ?></td>
                        <td><?php echo date("d/m/Y", strtotime($reserva['fim_hospedagem']));  ?></td>
                        
                        <td><?php $date1=date_create($reserva['inicio_hospedagem']);
                                  $date2=date_create($reserva['fim_hospedagem']);
                                  $diff=date_diff($date1,$date2);
                                  echo $diff->format("%a");?></td>



                        <td><?php $valor1 = $reserva['valorD'];
                                  $reserva['valor'] = $valor1 * $diff->format("%a");


                        echo 'R$ ' . number_format($reserva['valor'], 2, ',', '.'); ?></td>
                        <td><?php echo $reserva['status']; ?></td>




                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $reserva['id']; ?>" class="btn btn-sm btn-success"><i class=""></i> Visualizar</a>

                            <a href="reserva.php?id=<?php echo $reserva['id']; ?>&valor=<?php echo $reserva['valor'];?>&" class="btn btn-sm btn-warning"><i class=""></i> Efetivar</a>
                            <a href="edit.php?id=<?php echo $cliente['id_cliente']; ?>" class="btn btn-sm btn-danger"><i class=""></i> Não Efetivar</a>






                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
</div>
<!-- FIM TABELA -->



<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
