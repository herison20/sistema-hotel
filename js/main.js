/**
* Passa os dados do cliente para o Modal, e atualiza o link para exclusão
*/


$('#delete-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('apartamento');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente #' + id);
    modal.find('#confirm').attr('href', '../apartamentos/delete.php?id=' + id);
})

$('#delete_pacote-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('pacote');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Pacote #' + id);
    modal.find('#confirm').attr('href', '../pacotes/delete.php?id=' + id);
})

$('#delete-func-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('funcionario');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Funcionário #' + id);
    modal.find('#confirm').attr('href', '../funcionarios/delete.php?id=' + id);
})

$('#delete-passeio-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('passeio');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Passeio #' + id);
    modal.find('#confirm').attr('href', '../passeios/delete.php?id=' + id);
})

$('#delete-cardapio-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('cardapio');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Carápio #' + id);
    modal.find('#confirm').attr('href', '../cardapios/delete.php?id=' + id);
})

$('#delete-cliente-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('cliente');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente #' + id);
    modal.find('#confirm').attr('href', '../clientes/delete.php?id=' + id);
})

$('#delete-evento-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('evento');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Evento #' + id);
    modal.find('#confirm').attr('href', '../eventos/delete.php?id=' + id);
})
var primeiroValor = document.getElementById("#primeiro-valor").value;

var segundoValor = document.querySelector("#segundo-valor");
var campoResultado = document.querySelector("#resultado");

function calcular(primeiroValor, segundoValor){
    var valor1 = parseFloat(primeiroValor.value) || 0;
  var valor2 = parseFloat(segundoValor.value) || 0;
    return valor1 + valor2;
}

function evtCalcular(){
    var resultado = calcular(primeiroValor, segundoValor);
  
  campoResultado.value = resultado;
}

primeiroValor.addEventListener('blur', evtCalcular);
segundoValor.addEventListener('blur', evtCalcular);