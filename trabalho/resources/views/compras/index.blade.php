@extends('layouts.app')

@section('content')
<style>

</style>

 <h1 class="jumbotron">Minhas Compras</h1>

 <div class="container" style="max-width:80%;">
     <div class="box">
       <div class="produto_show">
         @if(count($compras) <= 0)
           <div class="alert alert-warning">
             <strong>O seu Carrinho ainda está vazio</strong>
              <script>
                 alert('Você ainda não comprou conosco!'); location= '{!! url('/pesquisar') !!}';
              </script>;
           </div>
         @else
           <table class="table">
             <thead class="thead-dark">
              <tr>
                <th scope="col">Código da Compra</th>
                <th scope="col">Itens na Compra</th>
                <th scope="col">Valor Total</th>
                <th scope="col">Detalhes</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($compras as $c)

                <tr>

                  <td>{{ $c->id }}</td>
                  <td>{{ $c->itens }}</td>
                  <td>{{ $c->total }}</td>
                  <td>
                    <form class="" action="{{ route('compras.show', $c->id )}}" method="get">
                      <input class="btn btn-primary" type="submit" name="" value="Detalhes">
                    </form>
                  </td>

                </tr>

              @endforeach

            </tbody>
          </table>
          @endif
      </div>
   </div>
 </div>



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

 $idc = $_GET["carrinho_id"];
 $compraid = $_GET["compra_id"];

 $sql = "INSERT INTO compras (user_id, total, itens) SELECT user_id,total,itens FROM carrinhos WHERE user_id = ".$idc.";";
 $result = $conn->query($sql);

 $sql2 = "INSERT INTO item_compras (produto_id, compra_id, quantia, valorU, valorT) SELECT produto_id, " .$compraid.",quantia, valorU, valorT FROM item_carrinhos where carrinho_id = ".$idc.";";
 $result2 = $conn->query($sql2);

 $sql3 = "UPDATE carrinhos SET total = 0.00, itens = 0  WHERE id = ".$idc.";";
 $result3 = $conn->query($sql3);

 $sql4 = "DELETE FROM item_carrinhos WHERE carrinho_id = ".$idc.";";
 $result4 = $conn->query($sql4);

 echo "<script type=\"text/javascript\">alert('Compra Concluida');</script>";

 }
 ?>



@endsection
