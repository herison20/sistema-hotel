<?php
    require_once ('functions.php');
    view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container bloco-titulo">
    <h2>Cliente ID: #<?php echo $cliente['id']; ?></h2>
    <hr>
</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Nome: </dt>
        <dd><?php echo $cliente['nome']; ?></dd>
        <dt>Data: </dt>

        <dd><?php echo date("d/m/Y", strtotime($cliente['data_nasc'])); ?></dd>

    </div>

    <div class="dl-horizontal">
        <dt>Sexo: </dt>
        <dd><?php echo $cliente['sexo'];?></dd>

        <dt>Fone: </dt>
        <dd><?php echo $cliente['fone']; ?></dd>

        <dt>Email: </dt>
        <dd><?php echo $cliente['email']; ?></dd>
    </div>
</div>



<?php include(FOOTER_TEMPLATE); ?>
