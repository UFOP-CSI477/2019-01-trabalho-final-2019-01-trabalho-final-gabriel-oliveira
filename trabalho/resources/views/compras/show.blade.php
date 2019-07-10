@extends('layouts.app')

@section('content')

<h1 class="jumbotron">Minhas Compras</h1>
<div class="container" style="max-width:60%;">
  <div class="box">
    <div class="produto_show">

      <table class="table">
        <thead class="thead-dark">
         <tr>
           <th scope="col">Produto</th>
           <th scope="col">Descrição</th>
           <th scope="col">Plataforma</th>
           <th scope="col">Valor Unitário</th>
           <th scope="col">Quantidade</th>
           <th scope="col">Valor Total</th>
         </tr>
       </thead>

       <tbody>
         <?php $total = 0; ?>
         @foreach ($item as $i)

           <tr>
             <td>{{ $i->pnome }}</td>
             <td>{{ $i->descr }}</td>
             <td>{{ $i->plat }}</td>
             <td>{{ $i->valorU }}</td>
             <td>{{ $i->quantia }}</td>
             <td>{{ $i->valorT }}</td>
           </tr>

         <?php $total += $i->valorT; ?>
         @endforeach

       </tbody>

       <tfoot class="bg-success">
         <th scope="col" colspan="5">Total</th><th scope="col" colspan="2"> {{ $total }} </th>

       </tfoot>
     </table>

    </div>
  </div>
</div>
@endsection
<script src="validar.js"></script>
