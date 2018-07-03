<?php  require_once 'functions.php';

    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Clientes</h2>
    </div>

    <div class="col-xs-6 text-right h2">

      <a href="add_cliente.php" class="btn btn-primary botao">Cadastrar Cliente</a>



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
                <th width="4%">Nome</th>
                <th width="2%">Data de Nascimento</th>
                <th width="1%">Sexo</th>
                <th width="1%">Fone</th>
                <th width="5%">Opções</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($clientes) : ?>
                <?php foreach ($clientes as $cliente) : ?>
                    <tr>
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nome']; ?></td>

                        <td><?php echo date("d/m/Y", strtotime($cliente['data_nasc']));  ?></td>

                        <td><?php echo $cliente['sexo']; ?></td>
                        <td><?php echo $cliente['fone']; ?></td>




                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $cliente['id']; ?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                            <a href="edit.php?id=<?php echo $cliente['id']; ?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-cliente-modal" data-cliente="<?php echo $cliente['id']; ?>">
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
