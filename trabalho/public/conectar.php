<html>
	<head>
	<meta charset="utf-8">
	<?php
		$servername = "localhost";	//Coneção ao BD ja funcional
		$username = "root";
		$password = "";
		$dbname = "web";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Falha na conexão ao BD: " . $conn->connect_error);
		}
	?>
	</head>
</html>
