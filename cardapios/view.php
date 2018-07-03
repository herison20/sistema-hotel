<?php
    require_once ('functions.php');
    view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container bloco-titulo">
    <h2>Cardápio ID: #<?php echo $cardapio['id']; ?></h2>
    <hr>
</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Tipo: </dt>
        <dd><?php echo $cardapio['tipo']; ?></dd>

        <dt>Descrição: </dt>
        <dd><?php echo $cardapio['descricao']; ?></dd>


    </div>

    <div class="dl-horizontal">


        <dt>Valor: </dt>
        <dd><?php echo 'R$ ' . number_format($cardapio['valor'], 2, ',', '.'); ?></dd>




    </div>






</div>




<?php include(FOOTER_TEMPLATE); ?>
