<?php  require_once 'functions.php';

    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Apartamentos</h2>
    </div>

    <div class="col-xs-6 text-right h2">

      <a href="add_ap.php" class="btn btn-primary botao">Cadastrar Apartamento</a>



    </div>

  </div>
  <hr>
</div>

<!-- INICIO TABELA -->
<div class="container bloco">
    <table class="table table-hover table-striped table-bordered table-condensed tabled">
        <thead class="" >
            <tr class="bg-primary">
                <th width="1%">Cód Ap</th>
                <th width="4%">Descrição</th>
                <th width="1%">Quant. Quartos</th>
                <th width="1%">Tipo</th>
                <th width="1%">Capacidade</th>
                <th width="1%">Valor Diária</th>
                <th width="4%">Opções</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($apartamentos) : ?>
                <?php foreach ($apartamentos as $apartamento) : ?>
                    <tr>
                        <td><?php echo $apartamento['id']; ?></td>
                        <td><?php echo $apartamento['descricao']; ?></td>

                        <td><?php echo $apartamento['quant_quartos']; ?></td>
                        <td><?php echo $apartamento['tipo']; ?></td>
                        <td><?php echo $apartamento['capacidade']; ?></td>
                        <td><?php echo 'R$ ' . number_format($apartamento['valor_diaria'], 2, ',', '.'); ?></p></td>






                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $apartamento['id']; ?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                            <a href="edit.php?id=<?php echo $apartamento['id']; ?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>

                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-apartamento="<?php echo $apartamento['id']; ?>">
                                <i class="fa fa-trash"></i> Excluir
                            </a>






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
