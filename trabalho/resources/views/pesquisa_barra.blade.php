@extends('layouts.app')

@section('content')

  <h1 class="jumbotron">LISTA DE PRODUTOS</h1>
  <nav class="navbar navbar-expand navbar-dark barra">
    <a href="#" class="navbar-brand" style="padding-right:20px; border-right: 2px solid white;">Buscar Produto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
      <form class="form-inline my-2 my-md-0" action="{!! url('/pesquisar') !!}" method="get">
        <input class="form-control mr-lg-4 input-lg" type="text"  name="produto" value="" placeholder="Busque um Produto">
        <a href="#" class="navbar-brand" style="padding-right:20px; border-right: 2px solid white;">Filtrar Por Plataformas</a>
        <select class="form-control mr-lg-4" name="filtrar">
            <option value="">Qualquer</option>
            <option value="ps4">PS4</option>
            <option value="xbox">XBOX</option>
            <option value="switch">Switch</option>
        </select>
        <input class="btn btn-primary mr-sm-4" type="submit" value="Pesquisar">
      </form>
    </div>

  </nav><br>

  <div class="pesquisa_1">
      <div class="pesquisa_menu">
        <p><b>Ordenar Por</b></p>
        <form action="{!! url('/pesquisar') !!}" method="get">
          <input type="radio" name="ordenar" value="precomenor">Menor Preço<br>
          <input type="radio" name="ordenar" value="precomaior">Maior Preço<br>
          <input class="btn btn-primary mr-sm-4" type="submit" value="Ordenar">
        </form>
      </div>

    <div class="pesquisa_resultado"  style="max-width=100%" >
      @if(count($produtos) <= 0)
        <div class="alert alert-warning">
          <strong>Desculpe,Não encontramos esse produto</strong>
           <script>
              alert('Desculpe,Não encontramos esse produto'); location= '{!! url('/home') !!}';
           </script>;
        </div>
      @else
        <table class="table">
          <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Plataforma</th>
            <th>Detalhes</th>
          </tr>
        @foreach ($produtos as $p)

            <tr>
              <td><img src="{{$p->img}}" alt="{{ $p->nome }}" style="width:70%"></td>
              <td>{{ $p->nome }}</td>
              <td>{{ $p->descricao }}</td>
              <td>{{ $p->valor }}</td>
              <td>{{ $p->plataforma }}</td>
              <td><form action="{{ route('produtos.show', $p->id) }}" method="get"><input class="btn btn-primary" type="submit" value="Detalhes"></td></form>
            </tr>

          @endforeach
        </table>
        @endif
          <!-- @foreach ($produtos as $p)
          <form class="col-md-3" action="{{ route('produtos.show', $p->id) }}" method="get">
            <div class="card col-xs-4">
              <img src="{{$p->img}}" alt="{{ $p->nome }}" style="width:100%">
              <h1>{{ $p->nome }}</h1>
              <p class="price">{{ $p->valor }}</p>
              <p>{{ $p->descricao }}</p>
              <p>{{ $p->plataforma }}</p>
              <input class="btn btn-primary" type="submit" value="Detalhes">
            </div>
            <br>
          </form>
          @endforeach -->
    </div>
  </div>
  <br><br>
</body>
@endsection
