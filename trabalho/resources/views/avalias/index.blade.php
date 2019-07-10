@extends('layouts.app')

@section('content')

 <h1 class="jumbotron">Minhas Avalições</h1>

 <div class="container" style="max-width:80%;">
     <div class="box">
       <?php $n = 1 ?>
       <div class="produto_show">
         @if(count($avalias) <= 0)
           <div class="alert alert-warning">
             <strong>Você ainda não avaliou nada!</strong>
           </div>
         @else
         @foreach ($avalias as $a)
         <?php $nota = $a->nota ?>
           <div class="avaliacao">
             <p><b>Avaliação : <?php echo $n ?></b></p>
             <p><b>Código do Produto : {{ $a->produto_id }}</b></p>
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

           </div>
           <br>
           <?php $n += 1 ?>



         @endforeach
         @endif
       </div>
   </div>
 </div>




@endsection
