<?php
    require_once ('functions.php') ;
    

?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="container bloco-titulo">
        <h2 class="">Editar Pacote</h2>
        <hr>
    </div>
	
    <div class="container bloco">
      <div class="form-group col-xs-4">
                    <label for="primeiro-valor">Tipo de Funcionário:</label>
                    <select class="form-control" id="primeiro-valor" name="primeiro-valor">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>  

<div>
  <label for="segundo-valor">Segundo valor</label>
  <input name="segundo-valor" id="segundo-valor" />
</div>
<div>
  <label for="resultado">Resultado</label>
  <input name="resultado" id="resultado" />  
</div>
    </div>
<?php
$date1=date_create("2017-08-10");
$date2=date_create("2017-08-13");
$diff=date_diff($date1,$date2);
echo $diff->format("%a");
?>

<?php include(FOOTER_TEMPLATE); ?>
