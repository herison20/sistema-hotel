<?php  require_once 'functions.php';

    index();
?>

<?php include(HEADER_TEMPLATE); ?>
<div class="container bloco-titulo">

  <div class="row">
    <div class="col-xs-6">
      <h2 class="">Passeios</h2>
    </div>

    <div class="col-xs-6 text-right h2">

      <a href="add_passeio.php" class="btn btn-primary botao">Cadastrar Passeio</a>



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

                <th width="2%">Guia</th>
                <th width="1%">Traslado</th>
                <th width="1%">Transporte</th>
                <th width="1%">Data</th>
                <th width="1%">Inicio</th>
                <th width="1%">Termino</th>
                <th width="1%">Local</th>
                <th width="1%">Valor</th>
                <th width="8%">Opções</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($passeios) : ?>
                <?php foreach ($passeios as $passeio) : ?>
                    <tr>
                        <td><?php echo $passeio['id']; ?></td>

                        <td><?php echo $passeio['nome']; ?></td>
                        <td><?php echo $passeio['matricula_translado']; ?></td>
                        <td><?php echo $passeio['tipo_transporte']; ?></td>
                        <td><?php echo date("d/m/Y", strtotime($passeio['data']));  ?></td>
                        <td><?php echo $passeio['hora_inicio']; ?></td>
                        <td><?php echo $passeio['hora_termino']; ?></td>
                        <td><?php echo $passeio['local_passeio']; ?></td>
                        <td><?php echo 'R$ ' . number_format($passeio['valor'], 2, ',', '.'); ?></td>






                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $passeio['id']; ?>" class="btn btn-sm btn-success"><i class=""></i> Visulizar</a>
                            <a href="edit.php?id=<?php echo $passeio['id']; ?>" class="btn btn-sm btn-warning"><i class=""></i> Editar</a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-passeio-modal" data-passeio="<?php echo $passeio['id']; ?>">
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
