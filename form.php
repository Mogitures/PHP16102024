<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário Request</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="card">
		<div class="card-body">
			<form action="request.php" method="post" id="form1">

				<h2 class="card-title" id="title1">Entrar na conta</h2>

				<label for="login">Login:</label>
				<input type="text" name="login" id="login" autocomplete="off" required autofocus maxlength="20">
				<br><br>
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha" autocomplete="off" required maxlength="12">
				<br><br>
				<input type="submit" name="enviar" value="Enviar" class="btn btn-dark">
				<input type="reset" name="limpar" value="Limpar" class="btn btn-dark">
				
			</form>

			<a href="<?php  ?>">Esqueci a senha</a>

		</div>
	</div>


	<!--

	Material:

	https://getbootstrap.com/docs/4.6/getting-started/introduction/
	Versão 4.6

	-->















	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>