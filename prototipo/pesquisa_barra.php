<?php include 'header.php'; ?>

  <style>
  .pesquisa_resultado{
    background-color: white;
    border: 1px solid grey;
    border-radius: 2px;
    position: absolute;
    top: 2px;
    left: 175px;
  }
  .pesquisa_1{
    border: 2px solid blue;
    border-radius: 2px;
    position: relative;
    height: 300px;
  }
  .pesquisa_menu{
    background-color: white;
    border: 1px solid grey;
    border-radius: 2px;
    position: absolute;
    top: 2px;
    left: 3px;
  }
  </style>

  <h1 class="jumbotron">LISTA DE PRODUTOS</h1>
  <div class="pesquisa_1">
    <div class="pesquisa_menu">
      <p><b>ORDENAR POR</b></p>
      <input type="checkbox" name="" value="">PREÇO DECRESCENTE<br>
      <input type="checkbox" name="" value="">PREÇO CRESCENTE<br>
      <input type="checkbox" name="" value="">Avaliação<br>
    </div>
    <div class="pesquisa_resultado">
      <table>
        <thead>
          <tr>
            <th>Imagem</th>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <img src="" alt="Imagem do Produto">
            </td>
            <td>Nome</td>
            <td>Descrição</td>
            <td>20.99</td>
            <th>
              <a href="#" class="btn btn-success">Detalhes</a>
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
<?php include 'foot.php'; ?>
