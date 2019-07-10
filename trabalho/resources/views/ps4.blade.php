@extends('layouts.app')

@section('content')
<script>
  document.getElementById("ps4").style.display = "inline";
  document.getElementById("minhabarra").style.background = "#0832A2";
</script>
<style>

</style>

<div class="jumbotron">
  <h2>PlayStation 4</h2>
</div>

  <div class="pesquisa_1">
      <div class="pesquisa_menu">
        <p><b>Ordenar Por</b></p>
        <form action="{!! url('/ps4') !!}" method="get">
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
    </div>
  </div>
  <br><br>
</body>
@endsection
