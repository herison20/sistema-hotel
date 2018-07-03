<?php  require_once 'functions.php';

    index();
    
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Pacotes</h2>
    </div>

    <div class="col-xs-6 text-right h2">

      <a href="add_pacote.php" class="btn btn-primary botao">Cadastrar Pacote</a>



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
                <th width="2%">Apartamento</th>
                <th width="2%">Passeio</th>
                <th width="1%">Valor</th>
                <th width="5%">Opções</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($pacotes) : ?>
                <?php foreach ($pacotes as $pacote) : ?>
                    <tr>
                        <td><?php echo $pacote['id']; ?></td>
                        <td><?php echo $pacote['descricao']; ?></td>
                        <td><?php echo $pacote['local_passeio']; ?></td>
                        <td><?php echo 'R$ ' . number_format($pacote['valor_pacote'], 2, ',', '.'); ?></p></td>








                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $pacote['id']; ?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                            <a href="edit.php?id=<?php echo $pacote['id']; ?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                            <a href="delete.php?id=<?php echo $pacote['id']; ?>" class="btn btn-sm btn-danger"><i class=""></i>Excluir</a>






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
