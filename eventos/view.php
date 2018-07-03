<?php
    require_once ('functions.php');
    view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container bloco-titulo">
    <h2>Cliente ID: #<?php echo $evento['id']; ?></h2>
    <hr>
</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Descrição: </dt>
        <dd><?php echo $evento['descricao']; ?></dd>
        <dt>Data: </dt>
        <dd><?php echo date("d/m/Y", strtotime($evento['data'])); ?></dd>

    </div>

    <div class="dl-horizontal">
        <dt>Local: </dt>
        <dd><?php echo $evento['local'];?></dd>

        <dt>Inicio: </dt>
        <dd><?php echo $evento['hora_inicio']; ?></dd>

        <dt>Valor: </dt>
        <dd><?php echo 'R$ ' . number_format($evento['valor'], 2, ',', '.'); ?></dd>
    </div>
</div>



<?php include(FOOTER_TEMPLATE); ?>
