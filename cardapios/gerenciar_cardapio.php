<?php  require_once 'functions.php';

    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Cardápio</h2>
    </div>

    <div class="col-xs-6 text-right h2">

      <a href="add_cardapio.php" class="btn btn-primary botao">Cadastrar Cardápio</a>



    </div>

  </div>
  <hr>
</div>

<!-- INICIO TABELA -->
<div class="container bloco">
    <table class="table table-hover table-striped table-bordered table-condensed tabled">
        <thead class="" >
            <tr class="bg-primary">
                <th width="1%">Cód</th>

                <th width="5%">Descrição</th>
                <th width="2%">Tipo</th>
                <th width="2%">Valor</th>

                <th width="4%">Opções</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($cardapios) : ?>
                <?php foreach ($cardapios as $cardapio) : ?>
                    <tr>
                        <td><?php echo $cardapio['id']; ?></td>

                        <td><?php echo $cardapio['descricao']; ?></td>

                        <td><?php echo $cardapio['tipo']; ?></td>

                        <td><?php echo 'R$ ' . number_format($cardapio['valor'], 2, ',', '.'); ?></p></td>






                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $cardapio['id']; ?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                            <a href="edit.php?id=<?php echo $cardapio['id']; ?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-cardapio-modal" data-cardapio="<?php echo $cardapio['id']; ?>">
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
