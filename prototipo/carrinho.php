<?php include 'header.php'; ?>
  <style>
    .divcarro{
      position: relative;
      margin-left: auto;
      margin-right: auto;
      padding: 10px;
    }

    .total{
      background-color: yellow;
    }
  </style>

  <h1 class="jumbotron">Meu Carrinho</h1>

  <div class="">
      <h2>TABELA COM O CARRINHO DO BD</h2>
  </div>

  <div class=" order-md-2 mb-4 divcarro">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Meu Carrinho</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Produto 1</h6>
            <small class="text-muted">Plataforma</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between total">
          <span>Total</span>
          <strong>$12</strong>
        </li>
      </ul>
      <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar Compra</button>
    </div>




  </body>
  <?php include 'foot.php'; ?>
