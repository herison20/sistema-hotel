<?php
    require_once ('functions.php');
    view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container bloco-titulo">
    <h2>Passeio ID: #<?php echo $passeio['id']; ?></h2>
    <hr>
</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Guia id: </dt>
        <dd><?php echo $passeio['matricula_guia']; ?></dd>
        <dt>Nome do Guia: </dt>
        <dd><?php echo $passeio['nome']; ?></dd>

        <dt>Traslado id: </dt>
        <dd><?php echo $passeio['matricula_translado']; ?></dd>
        <dt>Nome do Traslado: </dt>
        <dd><?php echo $passeio['matricula_translado']; ?></dd>
        <dt>Local: </dt>
        <dd><?php echo $passeio['local_passeio']; ?></dd>
        <dt>Data: </dt>
        <dd><?php echo $passeio['data']; ?></dd>
        <dt>Hora Inicio: </dt>
        <dd><?php echo $passeio['hora_inicio']; ?></dd>
        <dt>Hora Termino: </dt>
        <dd><?php echo $passeio['hora_termino']; ?></dd>
        <dt>Tipo de Transporte: </dt>
        <dd><?php echo $passeio['tipo_transporte']; ?></dd>




        <dt>Valor: </dt>
        <dd><?php echo 'R$ ' . number_format($passeio['valor'], 2, ',', '.'); ?></dd>



    </div>
</div>



<?php include(FOOTER_TEMPLATE); ?>
