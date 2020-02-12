<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$nome = $_POST['nome'];

	include "db_save.php";
	inserir($nome);
}




?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Saving_BD</title>
	<script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
  	function ajax(){
  		$.ajax({
  			url: "db_save.php",
  			type: "POST",
  			success: function (resp){
  				$.("#salvar").html(resp);
  			}
  		})
  	}
  </script>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="POST">
		Name:<input type="text" name="nome" palceholder="Insira seu nome"><br>
		<button>Enviar!</button>
		
	</form>

</body>
</html>
