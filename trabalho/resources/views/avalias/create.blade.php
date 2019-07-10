@extends('layouts.app')

@section('content')

<h1 class="jumbotron">Adicionar Avaliação</h1>
<div class="container" style="max-width:60%;">
    <div class="box">
      <div class="produto_show">
        <form id="formAvaliar" method="post" action="{{ route('avaliar.store') }}">

          @csrf
          <label for="nota"><b> Nota</b></label><br>
          <span name="nota">
            <input type="radio" name="nota" value="1">
            <label>Péssimo</label>
            <input type="radio" name="nota" value="2">
            <label>Ruim</label>
            <input type="radio" name="nota" value="3">
            <label>Bom</label>
            <input type="radio" name="nota" value="4"checked>
            <label>Muito Bom</label>
            <input type="radio" name="nota" value="5">
            <label>Excelente</label>
          </span>
          <br>
          <label for="texto"><b>Comentário</b></label><br>
          <textarea name="texto" rows="8" cols="50" required></textarea>
          <input type="text" name="produto_id" value="{{ $prod }}" style="display:none;">
          <input type="text" name="user_id" value="{{ Auth::user()->id }}" style="display:none;">

          <br>
          <input class="btn btn-success" type="submit" name="avaliacao" value="Enviar">

        </form>
      </div>
    </div>
  </div>
</div>
<script src="validar.js"></script>



@endsection
