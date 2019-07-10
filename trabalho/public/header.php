<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GameStart</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="css/meu.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  </head>
<header>
    <nav class="navbar navbar-expand-sm barra navbar-dark">

      <a href="index.php" class="navbar-brand" style="padding-right:20px; border-right: 2px solid white;">GameStart</a>
      <a href="index.php" class="navbar-brand">Plataforma</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">

        <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">PlayStation 4</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="jogos_ps.php">Jogos</a>
              <a class="dropdown-item" href="extra_ps.php">Acessórios</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">XBOX One</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="jogos_xbox.php">Jogos</a>
              <a class="dropdown-item" href="extra_xbox.php">Acessórios</a>
            </div>
          </li>

          <li class="nav-item dropdown barra opcao">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Nintendo Switch</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="jogos_nin.php">Jogos</a>
              <a class="dropdown-item" href="extra_nin.php">Acessórios</a>
            </div>
          </li>

          <li class="nav-item dropdown barra opcao" style="padding-right:20px; border-right: 2px solid white;">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">PC</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Jogos</a>
              <a class="dropdown-item" href="#">Acessórios</a>
            </div>
          </li>
          
        </ul>

        <!-- <form class="form-inline mt-2 mt-md-0" action="pesquisa_barra.php" method="post">
          <input class="form-control mr-sm-2" type="text" name="pesquisa" placeholder="Busque um Produto" >
          <input class="btn btn-primary mr-sm-4" type="submit" value="Pesquisar">
        </form> -->
        <ul class="navbar-nav" style="padding-left:20px;">
          <li class="nav-item barra ">
            <a href="usuario.php" class="nav-link active">Bem Vindo(a) $_SESSION</a>
          </li>
          <li class="nav-item barra ">
            <a href="carrinho.php" class="nav-link active">Meu Carrinho</a>
          </li>
          <li class="logotipo1" id="ps4">
            <img src="img/ps4.jpg" alt="PS4">
          </li>
          <li class="logotipo1" id="xbox">
            <img src="img/xbox.png" alt="Xbox">
          </li>
          <li class="logotipo1" id="nin">
            <img src="img/switch.png" alt="Switch">
          </li>
        </ul>

      </div>

    </nav>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</header>
<body>
