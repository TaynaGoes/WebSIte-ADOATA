<?php
	//IP do servidor
	$hostName = "localhost"; //localhost
	//Nome do usuário do banco de dados
	$userName = "id13480855_id3101795"; //nomedousuário
	//Senha do usuário do banco de dados
	$passUser = "Pn<MHJbuC8Nxa0~^";
	//Nome do Banco
	$banco = "id13480855_banco_tcc";


	$con = new mysqli($hostName, $userName, $passUser, $banco);
	if(mysqli_connect_errno()) trigger_error("Erro ao conectar no banco.");


?>