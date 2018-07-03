<?php
    require_once ('functions.php');
    view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container bloco-titulo">
    <h2>Reserva ID: #<?php echo $reserva['id']; ?></h2>
    <hr>
</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Cliente id: </dt>
        <dd><?php echo $reserva['id_cliente']; ?></dd>
        <dt>Nome do Cliente: </dt>
        <dd><?php echo $reserva['nome_cliente']; ?></dd>

        <dt>Apartamento id: </dt>
        <dd><?php echo $reserva['id_ap']; ?></dd>
        <dt>Descrição do AP: </dt>
        <dd><?php echo $reserva['descricao_ap']; ?></dd>
        <dt>Valor Diária: </dt>
        <dd><?php echo 'R$ ' . number_format($reserva['valorD'], 2, ',', '.'); ?></dd>
        <dt>Nome do Funcionário: </dt>
        <dd><?php echo $reserva['nome_func']; ?></dd>
        <dt>Data Inicio: </dt>
        <dd><?php echo $reserva['inicio_hospedagem']; ?></dd>
        <dt>Data Fim: </dt>
        <dd><?php echo $reserva['fim_hospedagem']; ?></dd>
        <dt>Data da Reserva: </dt>
        <dd><?php echo $reserva['data_reserva']; ?></dd>
        <dt>Status: </dt>
        <dd><?php echo $reserva['status']; ?></dd>




        <dt>Valor Total: </dt>
        <dd><?php echo 'R$ ' . number_format($reserva['valor'], 2, ',', '.'); ?></dd>



    </div>
</div>



<?php include(FOOTER_TEMPLATE); ?>
