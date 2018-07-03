<?php  require_once 'functions.php';

    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Histórico</h2>
    </div>

    <div class="col-xs-6 text-right h2">





    </div>

  </div>
  <hr>
</div>

<!-- INICIO TABELA -->
<div class="container bloco">
    <table class="table table-hover table-striped table-bordered table-condensed tabled">
        <thead class="" >
            <tr class="bg-primary">
                <th width="1%">ID do Cliente</th>
                <th width="8%">Nome do Cliente</th>

                <th width="1%">Fone</th>
                <th width="1%">Opções</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($clientes) : ?>
                <?php foreach ($clientes as $cliente) : ?>
                    <tr>
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['fone']; ?></td>
                        <td class="actions text-center">
                            <a href="view.php?id=<?php echo $cliente['id']; ?>" class="btn btn-xl btn-success "><i ></i> Visulizar</a>
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




<?php include(FOOTER_TEMPLATE); ?>
