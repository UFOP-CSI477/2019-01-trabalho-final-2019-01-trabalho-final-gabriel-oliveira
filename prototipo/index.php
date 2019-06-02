<?php include 'header.php'; ?>
  <br><br>
    <div class="jumbotron">
      <h1> BEM VINDO AOS JOGOS</h1>
      <h3> Texto/logo</h3>
    </div>

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
            <h3 class="h3-responsive">TESTE 1</h3>
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

    <div class="jumbotron">
      <h3> Principais Lançamentos</h3>
    </div>

    <form class="" action="produto.php" method="post">
      <div class="row" style="margin: auto;border: 2px solid black;">
          <div class="col-md-3" style="">
            <h2>Mario Kart 8</h2>
            <p>Descrição. </p>
            <img src="img/mk8.png" alt="Imagem" style="display: block;margin-left: auto;margin-right: auto;">
            <p><input class="btn btn-primary mr-sm-4" type="submit" value="Detalhes »"></p>
          </div>
          <div class="col-md-3">
            <h2>Madden 20</h2>
            <p>Descrição</p>
            <img src="img/madden20.png" alt="Imagem" style="display: block;margin-left: auto;margin-right: auto;">
            <p><input class="btn btn-primary mr-sm-4" type="submit" value="Detalhes »"></p>
          </div>
          <div class="col-md-3">
            <h3>Resident Evil 2 Remake</h3>
            <img src="img/re2.jpg" alt="Imagem" style="display: block;margin-left: auto;margin-right: auto;">
            <p>Descriçao daodeoodedjiada paep eid a ej iaeuh ihdeud hh ah domino edi j ah hea sded se nuom lde dkajdej uy egf vce e asd g</p>
            <p><input class="btn btn-primary mr-sm-4" type="submit" value="Detalhes »"></p>
          </div>
          <div class="col-md-3">
            <h2>God of War</h2>
            <p>Descriçao do jogo lalalalalalal</p>
            <img src="img/gow.png" alt="Imagem" style="display: block;margin-left: auto;margin-right: auto;">
            <p><input class="btn btn-primary mr-sm-4" type="submit" value="Detalhes »"></p>
          </div>
        </div>
      </form>



    </body>

  </body>
    <?php include 'foot.php'; ?>
