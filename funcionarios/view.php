<?php
    require_once ('functions.php');
    view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container bloco-titulo">
    <h2>Funcionário Matrícula: #<?php echo $funcionario['id']; ?></h2>
    <hr>
</div>

<div class="container bloco ">

    <div class="dl-horizontal">
        <dt>Nome: </dt>
        <dd><?php echo $funcionario['nome']; ?></dd>
        <dt>Data de Admissão: </dt>
        <dd><?php echo date("d/m/Y", strtotime($funcionario['data_admissao']));  ?></dd>

        <dt>Tipo de Função: </dt>
        <dd><?php echo $funcionario['tipo_func']; ?></dd>



    </div>


</div>



<?php include(FOOTER_TEMPLATE); ?>
