@extends('layouts.app')

@section('content')
<script type="text/javascript">
  function calcular() {
    var num1 = Number(document.getElementById("num1").value);
    var num2 = Number(document.getElementById("num2").value);
    document.getElementById('total').value = num1 * num2;
  }
</script>

<h1 class="jumbotron">{{ $produtos->nome }} é aqui na GameStart</h1>
<div class="container" style="max-width:60%;">
    <div class="box">
      <div class="produto_show">
        <img src="{{$produtos->img}}" alt="{{ $produtos->nome }}" style="width:70%">
        <form id="formProd" action="" method="get">
          <input type="text" name="produto_id" value="{{ $produtos->id }}" style="display:none;">
          <input type="text" name="valorU" value="{{ $produtos->valor }}" style="display:none;">
          <input type="text" name="carrinho_id" value="{{ Auth::user()->id }}" style="display:none;">
          <div class="info-pesquisa">
              <h1>{{ $produtos->nome }}</h1>
              <p>{{ $produtos->descricao }}</p>
              <p>{{ $produtos->plataforma }}</p>
              <p class="valor">Valor : {{ $produtos->valor }}</p>
              <p class="avaliar">Avaliações  dos Usuários :
                @if(count($avalias) <= 0)
                  <div class="alert alert-warning">
                    <strong>Ainda sem avaliações para {{ $produtos->nome }} - {{ $produtos->plataforma }}</strong>
                  </div>
                @else
                  <?php $nota = 0;$x=0;?>
                  @foreach ($avalias as $a)
                  <?php
                    $nota += $a->nota;
                    $x += 1;
                    ?>
                  @endforeach
                  <?php $notamed = $nota/$x;
                  if ($notamed >= 5){
                    ?><img src="{{ asset('img/5stars.png') }}"></p><?php
                  }
                  else if ($notamed >= 4) {
                    ?><img src="{{ asset('img/4stars.png') }}"></p><?php
                  }
                  else if ($notamed >= 3) {
                    ?><img src="{{ asset('img/3stars.png') }}"></p><?php
                  }
                  else if ($notamed >= 2){
                    ?><img src="{{ asset('img/2stars.png') }}"></p><?php
                  }
                  else {
                    ?><img src="{{ asset('img/1star.png') }}"></p><?php
                  }
                  ?>
              @endif

              <label for="quantidade">Quantidade : </label>
              <input type="number" name="quantia" id="num2" onblur="calcular();" min="1" required><br>
              <input type="text" name="preco" id="num1" onblur="calcular();" value="{{ $produtos->valor }}" style="display:none;"/>
              <label for="tota">Total :</label>
              <input style="border:0;" name="valorT" id="total" type="text" readonly required><br><br>
              <input name="enviar" class="btn btn-success mr-sm-4" type="submit" value="Adicionar ao Carrinho">
              <a class="btn btn-warning mr-sm-4" href="{!! url('/pesquisar') !!}">Voltar</a>
            </form><br>
          </div>
      </div>


      <?php $n = 1 ?>
      <div class="produto_show">
        @if(count($avalias) <= 0)
          <div class="alert alert-warning">
            <strong>Ainda sem avaliações para {{ $produtos->nome }} - {{ $produtos->plataforma }}</strong>
          </div>
        @else
        <h1>Avaliações de {{ $produtos->nome }}</h1>
        @foreach ($avalias as $a)
        <?php $nota = $a->nota ?>
          <div class="avaliacao">
            <p><b>Avaliação <?php echo $n ?></b></p>
            <p><b>Usuário : </b>{{ $a->user }}</p>
            <p><b>Nota : </b>
              <?php
              if ($nota >= 5){
                ?><img src="{{ asset('img/5stars.png') }}"></p><?php
              }
              else if ($nota >= 4) {
                ?><img src="{{ asset('img/4stars.png') }}"></p><?php
              }
              else if ($nota >= 3) {
                ?><img src="{{ asset('img/3stars.png') }}"></p><?php
              }
              else if ($nota >= 2){
                ?><img src="{{ asset('img/2stars.png') }}"></p><?php
              }
              else {
                ?><img src="{{ asset('img/1star.png') }}"></p><?php
              }
              ?>
            <p><b>Comentário do Usuário : </b>{{ $a->texto }}</p>
          </div><br>
          <?php $n += 1 ?>
        @endforeach
        @endif
        <form action="{{ route('avaliar.create') }}" method="get">
          <input type="text" name="produto_id" value="{{ $produtos->id }}" style="display:none;">
          <input name="avaliar" class="btn btn-primary mr-sm-4" type="submit" value="Nova Avaliação">
        </form>
      </div>
    </div>
  </div>
</div>

<script src="validar.js"></script>







<?php
if(isset($_GET['enviar'])){
  $servername = "localhost";	//Coneção ao BD ja funcional
  $username = "root";
  $password = "";
  $dbname = "trabalho_web";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Falha na conexão ao BD: " . $conn->connect_error);
  }

$id = $_GET["produto_id"];
$idc = $_GET["carrinho_id"];
$quantia = $_GET["quantia"];
$preco = $_GET["valorU"];
$total = $_GET["valorT"];

$sql4 = "INSERT INTO carrinhos (user_id,total, itens)
SELECT ".$idc.",0.00, 0 FROM carrinhos
WHERE NOT EXISTS (SELECT * FROM carrinhos
      WHERE user_id = ".$idc.")
LIMIT 1;";
$result4 = $conn->query($sql4);

$sql = "INSERT INTO `item_carrinhos` (`produto_id`, `carrinho_id`, `valorU`, `quantia`, `valorT`) VALUES (".$id.", ".$idc.", ".$preco.", ".$quantia.", ".$total.");";
$result = $conn->query($sql);

$sql2 = "UPDATE carrinhos SET itens = itens+1 WHERE id = ".$idc.";";
$result2 = $conn->query($sql2);
//
$sql3 = "UPDATE carrinhos SET total = total+".$total." WHERE id = ".$idc.";";
$result3 = $conn->query($sql3);

echo "<script type=\"text/javascript\">alert('Produto Inserido no Carrinho');</script>";

}
?>


@endsection
