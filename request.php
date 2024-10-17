<?php 

	$nome = $_POST['login'];
	$senha = $_POST['senha'];

	if ($nome == 'etecia' && $senha == 'etecia') {
		echo "Bem-vindo ao sistema!";
	}else{
		echo "Erro ao acessar o sistema.";
	}

 ?>