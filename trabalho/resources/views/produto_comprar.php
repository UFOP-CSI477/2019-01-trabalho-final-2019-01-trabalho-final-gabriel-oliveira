<?php include 'header.php'; ?>
	<body>
		<?php
	    include 'conectar.php';
	    $id = $_POST["id_prod"];
			$quantia = $_POST["quantidade"];
			$preco = $_POST["preco"];
			$total = $_POST["tota"];

			$sql = "INSERT INTO `item_carrinho` (`id_produto`, `id_carrinho`, `valor_u`, `quantidade`, `valor_t`) VALUES (".$id.", '1', ".$preco.", ".$quantia.", ".$total.");";
			$result = $conn->query($sql);

			$sql2 = "UPDATE carrinho SET num_itens = num_itens+1 WHERE id = 1;";
			$result2 = $conn->query($sql2);

			$sql3 = "UPDATE carrinho SET total = total+".$total." WHERE id = 1;";
			$result3 = $conn->query($sql3);
			//echo $sql;
		?>
		
		<form action="carrinho.php">
			<h1 class="jumbotron">Produto Inserido no Carrinho</h1>
			<input type="submit" name="" value="Ir para Carrinho" class="btn btn-success mr-sm-4">
			<input onclick="location.href='index.php'" type="button" value="Menu Principal" class="btn btn-primary mr-sm-4">
		</form>
	</body>
</html>
