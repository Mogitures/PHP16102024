<?php 

	$nome = $_REQUEST['login'];
	$senha = $_REQUEST['senha'];

	if ($nome == 'etecia' && $senha == 'etecia') {
		echo "Bem-vindo ao sistema!";
	}else{
		echo "Erro ao acessar o sistema.";
	}

 ?>