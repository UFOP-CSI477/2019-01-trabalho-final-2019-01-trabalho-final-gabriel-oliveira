@extends('layouts.app')

@section('content')

<h1 class="jumbotron">Confirmar Adição do Item?</h1>
<div class="container" style="max-width:60%;">
    <div class="box">
      <div class="produto_show">
        <form action="{{ route('item.store') }}" method="get">
          <input type="text" name="produto_id" value="{{ produto_id }}" style="display:none;">
          <input type="text" name="carrinho_id" value="{{ Auth::user()->id }}" style="display:none;">
          <input type="text" name="valorU" value="{{ $produtos->valor }}" style="display:none;">
          <img src="{{ $produtos->img }}" alt="{{ $produtos->nome }}" style="width:100%">
          <input class="btn btn-success mr-sm-4" type="submit" value="Adicionar ao Carrinho">
          <a class="btn btn-warning mr-sm-4" href="{!! url('/pesquisar') !!}">Voltar</a>
        </form>
      </div>
    </div>
  </div>
</div>




@endsection
