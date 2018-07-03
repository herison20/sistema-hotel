<?php  require_once 'functions.php';

    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Funcionários</h2>
    </div>

    <div class="col-xs-6 text-right h2">

      <a href="add_func.php" class="btn btn-primary botao">Cadastrar Funcionário</a>



    </div>

  </div>
  <hr>
</div>

<!-- INICIO TABELA -->
<div class="container bloco">
    <table class="table table-hover table-striped table-bordered table-condensed tabled">
        <thead class="" >
            <tr class="bg-primary">
                <th width="1%">Mat</th>
                <th width="3%">Nome</th>
                <th width="1%">Data de Admissão</th>
                <th width="1%">Função</th>
                <th width="2%">Opções</th>


            </tr>
        </thead>
        <tbody>
            <?php if ($funcionarios) : ?>
                <?php foreach ($funcionarios as $funcionario) : ?>
                    <tr>
                        <td><?php echo $funcionario['id']; ?></td>
                        <td><?php echo $funcionario['nome']; ?></td>

                        <td><?php echo date("d/m/Y", strtotime($funcionario['data_admissao']));  ?></td>

                        <td><?php echo $funcionario['tipo_func']; ?></td>





                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                            <a href="edit.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-func-modal" data-funcionario="<?php echo $funcionario['id']; ?>">
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
