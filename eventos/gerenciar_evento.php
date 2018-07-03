<?php  require_once 'functions.php';

    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Eventos</h2>
    </div>

    <div class="col-xs-6 text-right h2">

      <a href="add_evento.php" class="btn btn-primary botao">Cadastrar Evento</a>



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
                <th width="1%">Data</th>
                <th width="3%">Local</th>
                <th width="1%">Horário</th>
                <th width="1%">Valor</th>
                <th width="5%">Opções</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($eventos) : ?>
                <?php foreach ($eventos as $evento) : ?>
                    <tr>
                        <td><?php echo $evento['id']; ?></td>

                        <td><?php echo $evento['descricao']; ?></td>
                        <td><?php echo date("d/m/Y", strtotime($evento['data']));  ?></td>
                        <td><?php echo $evento['local']; ?></td>
                        <td><?php echo $evento['hora_inicio']; ?></td>
                        <td><?php echo 'R$ ' . number_format($evento['valor'], 2, ',', '.'); ?></p></td>






                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $evento['id']; ?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                            <a href="edit.php?id=<?php echo $evento['id']; ?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-evento-modal" data-evento="<?php echo $evento['id']; ?>">
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
    <div class="">
        <a href="#" class="btn btn-primary btn-md">Gerar Relatório</a>

    </div>
</div>
<!-- FIM TABELA -->



<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
