<?php

    session_start();
    include_once ('conexao/conectar.php');

    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $data = mysqli_real_escape_string($con, $_POST['data']);
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);
    $qtd = mysqli_real_escape_string($con, $_POST['qtd']);
    $foto = $_FILES['foto'];
    $desc = nl2br(mysqli_real_escape_string($con, $_POST['desc']));
    $id = $_SESSION['id'];

    $data_array = explode("/", $data);
    $data_array_new = array($data_array[2], $data_array[1], $data_array[0]);
    $data_new = implode("-", $data_array_new);

    $extensao = explode(".", $foto['name']);
    $nome_foto = "produtos/" . substr(md5(date('d/m/Y H:i:s')), 0, 15) . "." . $extensao[1];

    $sql = "INSERT INTO produto VALUES (NULL, '$nome', '$data_new', '$categoria', '$qtd', '$nome_foto', '$desc', '$id');";
    $query = mysqli_query($con, $sql);
    if($query){
        
            move_uploaded_file($foto['tmp_name'], $nome_foto);
        	header('location: visualizar_produtos.php');
		exit();
		
	} else{
		
		header('location: produto.php');
		exit();

	}

    
  

?>