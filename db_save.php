<?php
function startup ($save)
 {
	
	$connect = connect();
	
	$query = "SELECT * FROM lista";
	$result = $connect -> prepare($query);
	$result -> execute();

	foreach($result as $linha){
	 echo $linha ['nome']."<br>";
	}

  }

	function inserir($nome){
		$connect = connect();
		$query = "INSERT INTO lista (nome) VALUES (?)"; // um ? por parâmetro

		$result = $connect -> prepare($query);
		$result -> execute(array($nome));
		echo "Salvo!";
	}

	function connect()
	{
		$connect = new PDO("mysql:host=localhost; dbname=lista", "root", "");

		return $connect;
	}

	


?>