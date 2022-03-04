<?php

session_start();
include_once ('conexao/conectar.php');

$login = mysqli_real_escape_string($con, $_POST['login']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);
$tipoL = intval(mysqli_real_escape_string($con, $_POST['tipoL']));

if((empty($login)) || (empty($senha)) || (empty($tipoL))){

	header('location: login.php');
	exit();

}

if($tipoL === 1){

	$sql = "SELECT * FROM beneficiado WHERE LoginB = '$login' AND SenhaB = md5('{$senha}');";
	$query = mysqli_query($con, $sql);
	$rows = mysqli_num_rows($query);
	if($rows === 1){
		
		$_SESSION['beneficiado'] = true;
		header('location: visualizar_produtos.php');
		exit();
		
	} else{
		
		header('location: login.html');
		exit();

	}

}else if($tipoL === 2){

	$sql = "SELECT * FROM doador WHERE LoginD = '$login' AND SenhaD = md5('{$senha}')";
	$query = mysqli_query($con, $sql);
	$rows = mysqli_num_rows($query);
	if($rows === 1){

		$dados = mysqli_fetch_array($query);
		$id = $dados[0];
		$_SESSION['id'] = $id;
		$_SESSION['doador'] = true;
		header('location: produto.php');
		exit();

	} else{

		header('location: login.html');
		exit();

	}

}

?>