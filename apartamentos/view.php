<?php
    require_once ('functions.php');
    view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container bloco-titulo">
    <h2>Apartamento ID: #<?php echo $apartamento['id']; ?></h2>
    <hr>
</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Descrição: </dt>
        <dd><?php echo $apartamento['descricao']; ?></dd>

        <dt>Quantida de Quartos: </dt>
        <dd><?php echo $apartamento['quant_quartos']; ?></dd>


    </div>

    <div class="dl-horizontal">
        <dt>Tipo: </dt>
        <dd><?php echo $apartamento['tipo'];?></dd>

        <dt>Capacidade: </dt>
        <dd><?php echo $apartamento['capacidade']; ?></dd>



    </div>
</div>



<?php include(FOOTER_TEMPLATE); ?>
