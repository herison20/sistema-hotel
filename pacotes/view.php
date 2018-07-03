<?php
    require_once ('functions.php');
    view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container bloco-titulo">
    <h2>Pacote ID: #<?php echo $pacote['id']; ?></h2>
    <hr>
</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Apartamento id: </dt>
        <dd><?php echo $pacote['id_ap']; ?></dd>
        <dt>Descricao: </dt>
        <dd><?php echo $pacote['descricao']; ?></dd>

        <dt>Passeio id: </dt>
        <dd><?php echo $pacote['id_passeio']; ?></dd>
        <dt>Local do Passeio: </dt>
        <dd><?php echo $pacote['local_passeio']; ?></dd>


    </div>

    <div class="dl-horizontal">
        <dt>Valor: </dt>
        <dd><?php echo 'R$ ' . number_format($pacote['valor_pacote'], 2, ',', '.'); ?></dd>





    </div>
</div>



<?php include(FOOTER_TEMPLATE); ?>
