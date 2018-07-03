<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>LIVRO CAIXA</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/font.css">
    </head>
    <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand">SISTEMA HOTEL</a>

        </div>
        <div id="collapse1" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Cadastrar <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../clientes/add_cliente.php">Cadastrar Cliente</a></li>
                <li><a href="../clientes/gerenciar_cliente.php">Gerenciar Cliente</a></li>
                <li><a href="../funcionarios/add_func.php">Cadastrar Funcionário</a></li>
                <li><a href="../funcionarios/gerenciar_func.php">Gerenciar Funcionário</a></li>




              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Apartamentos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../apartamentos/add_ap.php" value="2017">Cadastrar Apartamento</a></li>
                <li><a href="../apartamentos/gerenciar_ap.php" value="2017">Gerenciar Apartamentos</a></li>
                <li><a href="mes.php?ano=2017" value="2017">Listar Aps. Vagos</a></li>
                <li><a href="mes.php?ano=2017" value="2017">Listar Aps. Ocupados</a></li>


              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Reservas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../reservas/gerenciar_reserva.php">Reservas</a></li>
                <li><a href="mes.php?ano=2017" value="2017">Reservas Efetivadas</a></li>


              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Eventos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../eventos/add_evento.php" value="2017">Cadastrar Evento</a></li>
                <li><a href="../eventos/gerenciar_evento.php" value="2016">Gerenciar Eventos</a></li>


              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Passeios<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="../passeios/comprar_passeio.php" value="2017">Comprar Passeio</a></li>
                <li><a href="../passeios/add_passeio.php" value="2017">Cadastrar Passeio</a></li>
                <li><a href="../passeios/gerenciar_passeio.php" value="2016">Gerenciar Passeio</a></li>



              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Cardápio<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../cardapios/add_cardapio.php" value="2017">Cadastrar Cardápio</a></li>
                <li><a href="../cardapios/gerenciar_cardapio.php" value="2016">Gerenciar Cardápio</a></li>



              </ul>
            </li>

            <li><a href="../historicos/gerenciar_historico.php">Histórico</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-dropdown"> Pacotes<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../pacotes/comprar_pacote.php" value="2017">Comprar Pacote</a></li>
                <li><a href="../pacotes/add_pacote.php" value="2017">Cadastrar Pacote</a></li>
                <li><a href="../pacotes/gerenciar_pacote.php" value="2016">Gerenciar Pacote</a></li>



              </ul>
            </li>
          </ul>
          <p class=" navbar-text navbar-right"><strong>Olá </strong> Usuário</p>
        </div>
      </div>
    </nav>
    <main>
