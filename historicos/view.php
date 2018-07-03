<?php
    require_once ('functions.php');

    view($_GET['id']);

?>
<?php include(HEADER_TEMPLATE); ?>
<?php if ($clientes) : ?>
    <?php foreach ($clientes as $cliente) : ?>
<div class="container bloco-titulo">

    <div class="row">
        <div class="form-group col-xs-3">
            <h2><?php echo date("d/m/Y", strtotime($cliente['data_reserva']));  ?></h2>
        </div>
        <div class="form-group col-xs-9 text-right">
            <h2><?php echo 'TOTAL: R$ ' . number_format($cliente['valor'], 2, ',', '.'); ?></h2>
        </div>
    </div>

</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Cliente id: </dt>
        <dd><?php echo $cliente['id_cliente']; ?></dd>
        <dt>Nome do Cliente: </dt>
        <dd><?php echo $cliente['nome']; ?></dd>

        <dt>Apartamento id: </dt>
        <dd><?php echo $cliente['id_ap']; ?></dd>
        <dt>Descrição do AP: </dt>
        <dd><?php echo $cliente['descricao_ap']; ?></dd>
        <dt>Valor Diária: </dt>
        <dd><?php echo 'R$ ' . number_format($cliente['valorD'], 2, ',', '.'); ?></dd>
        <dt>Nome do Funcionário: </dt>
        <dd><?php echo $cliente['nome_func']; ?></dd>
        <dt>Data Inicio: </dt>
        <dd><?php echo $cliente['inicio_hospedagem']; ?></dd>
        <dt>Data Fim: </dt>
        <dd><?php echo $cliente['fim_hospedagem']; ?></dd>
        <dt>Data da Reserva: </dt>
        <dd><?php echo $cliente['data_reserva']; ?></dd>
        <dt>Status: </dt>
        <dd><?php echo $cliente['status']; ?></dd>




        <dt>Valor Total: </dt>
        <dd><?php echo 'R$ ' . number_format($cliente['valor'], 2, ',', '.'); ?></dd>



    </div>

</div>
<hr>
<?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="6">Nenhum registro encontrado.</td>
    </tr>
    <?php endif; ?>


    <?php if ($passeios) : ?>
        <?php foreach ($passeios as $passeio) : ?>
    <div class="container bloco-titulo">

        <div class="row">
            <div class="form-group col-xs-3">
                <h2><?php echo date("d/m/Y", strtotime($passeio['data']));  ?></h2>
            </div>
            <div class="form-group col-xs-9 text-right">
                <h2><?php echo 'TOTAL: R$ ' . number_format($passeio['valor'], 2, ',', '.'); ?></h2>
            </div>
        </div>

    </div>

    <div class="container bloco ">

        <div class="dl-horizontal">
            <dt>Cliente id: </dt>
            <dd><?php echo $passeio['id_cliente']; ?></dd>
            <dt>Nome do Cliente: </dt>
            <dd><?php echo $passeio['nome']; ?></dd>

            <dt>Passeio id: </dt>
            <dd><?php echo $passeio['id_passeio']; ?></dd>
            <dt>Local: </dt>
            <dd><?php echo $passeio['local_passeio']; ?></dd>










        </div>

    </div>
    <hr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
        </tr>
        <?php endif; ?>





<?php include(FOOTER_TEMPLATE); ?>
