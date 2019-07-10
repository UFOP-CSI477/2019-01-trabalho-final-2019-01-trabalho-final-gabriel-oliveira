@extends('layouts.app')

@section('content')
    <body>
      <div class="jumbotron">
        <h1> GameStart - Start Playing</h1>
        <h3> O melhor lugar para comprar. Sua Jornada começa aqui!</h3>
      </div>

      <br>
      <!--Carousel Wrapper-->
      <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-2" data-slide-to="1"></li>
          <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="view">
              <img class="d-block w-100" src="img/painel1.png"
                alt="First slide">
              <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive"></h3>
              <p>Blablablabalabablablasda</p>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="img/painel2.png"
                alt="Second slide">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">2</h3>
              <p>Blablablabalabablablasda</p>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="img/painel3.png"
                alt="Third slide">
              <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">3</h3>
              <p>Blablablabalabablablasda</p>
            </div>
          </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->
      <br><br>

      <nav class="navbar navbar-expand navbar-dark barra">
        <a href="#" class="navbar-brand" style="padding-right:20px; border-right: 2px solid white;">Buscar Produto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
          <form class="form-inline my-2 my-md-0" action="{!! url('/pesquisar') !!}" method="GET">
            <input class="form-control mr-lg-4 input-lg" type="text" name="produto" placeholder="Busque um Produto">
            <a href="#"  class="navbar-brand" style="padding-right:20px; border-right: 2px solid white;">Filtrar Por Plataforma</a>
            <select class="form-control mr-lg-4" name="filtrar">
                <option value="">Qualquer</option>
                <option value="ps4">PS4</option>
                <option value="xbox">XBOX</option>
                <option value="switch">Switch</option>
            </select>
            <input class="btn btn-primary mr-sm-4" type="submit" value="Pesquisar">
          </form>
        </div>
      </nav>

      <div class="jumbotron">
        <h3>Principais Lançamentos</h3>
      </div>

      <form class="" action="produto.php" method="post">
        <div class="row" style="margin: auto;border: 2px solid black;">
            <div class="col-md-3" style="">
              <h2>Mario Kart 8</h2>
              <img src="{{ asset('img/mk8.jpg') }}" alt="Imagem" style="display: block;margin-left: auto;margin-right: auto;">
              <p>Descrição. </p>
              <input type="text" name="id_prod" value="2" style="display:none;">
              <p><input class="btn btn-primary mr-sm-4" type="submit" value="Detalhes »"></p>
            </div>
            <div class="col-md-3">
              <h2>Madden 19</h2>
              <img src="img/madden.jpg" alt="Imagem" style="display: block;margin-left: auto;margin-right: auto;">
              <p>Descrição</p>
              <input type="text" name="id_prod" value="3" style="display:none;">
              <p><input class="btn btn-primary mr-sm-4" type="submit" value="Detalhes »"></p>
            </div>
            <div class="col-md-3">
              <h3>Resident Evil 2 Remake</h3>
              <img src="img/re2.jpg" alt="Imagem" style="display: block;margin-left: auto;margin-right: auto;">
              <p>Descriçao daodeoodedjiada paep eid a ej iaeuh ihdeud hh ah domino edi j ah hea sded se nuom lde dkajdej uy egf vce e asd g</p>
              <input type="text" name="id_prod" value="1" style="display:none;">
              <p><input class="btn btn-primary mr-sm-4" type="submit" value="Detalhes »"></p>
            </div>
            <div class="col-md-3">
              <h2>God of War</h2>
              <img src="img/gow.jpg" alt="Imagem" style="display: block;margin-left: auto;margin-right: auto;">
              <p>Descriçao do jogo lalalalalalal</p>
              <input type="text" name="id_prod" value="17" style="display:none;">
              <p><input class="btn btn-primary mr-sm-4" type="submit" value="Detalhes »"></p>
            </div>
          </div>
        </form>



      </body>
@endsection
