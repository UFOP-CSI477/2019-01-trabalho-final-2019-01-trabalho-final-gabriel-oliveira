@extends('layouts.app')

@section('content')

 <h1 class="jumbotron">Meu Carrinho</h1>

 <div class="container" style="max-width:80%;">
     <div class="box">
       <div class="produto_show">
         @if(count($item) <= 0)
           <div class="alert alert-warning">
             <strong>O seu Carrinho ainda está vazio</strong>
              <script>
             	  alert('O seu Carrinho ainda está vazio!'); location= '{!! url('/pesquisar') !!}';
             	</script>;
           </div>
         @else
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
          <form action="" method="get">
            <?php $novac = $compra +1  ?>
              <input type="text" name="carrinho_id" value="{{ Auth::user()->id }}" style="display:none;">
              <input type="text" name="compra_id" value="{{ $novac }}" style="display:none;">
              <input class="btn btn-primary" type="submit" name="enviar" value="Confirmar Compra">
          </form>
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

 $sqlc = "SELECT MAX(id) FROM compras;";
 $resultc = $conn->query($sqlc);

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
