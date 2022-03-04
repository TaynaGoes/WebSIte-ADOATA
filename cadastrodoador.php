<?php
	//chamando o arquivo de conexão
	require ("conexao/conectar.php");
	$nome = mysqli_real_escape_string($con, $_POST["nome"]);
	$cpf = mysqli_real_escape_string($con, $_POST["cpf"]);
	$rg = mysqli_real_escape_string($con, $_POST["rg"]);
	$telefone = mysqli_real_escape_string($con, $_POST["fone"]);
	$email = mysqli_real_escape_string($con, $_POST["email"]);
	$senha = mysqli_real_escape_string($con, $_POST["senha"]);
	$login = mysqli_real_escape_string($con, $_POST["login"]);
	$estado = mysqli_real_escape_string($con, $_POST["estado"]);
	$cidade = mysqli_real_escape_string($con, $_POST["cidade"]);

	function testa_cpf($string){

		$cpf_sem_mascara = substr(str_replace("-", "", str_replace(".", "", $string)), 0, 9);
		
		
		$cpf_dv_enviado = substr(str_replace("-", "", str_replace(".", "", $string)), -2);
        $testa_cpf_igual = $cpf_sem_mascara . $cpf_dv_enviado;
		$primeiro_digito = $testa_cpf_igual[0];
		$contagem = substr_count($testa_cpf_igual, $primeiro_digito);

		if($contagem === 11){

			return false;

		}
		else{
		
    		#Dígito verificador 1:{
    
    			$a;
    			$b = 10;
    			
    			for($a = 0; $a < 9; $a++){
    				
    				$digito_1[$a] = $cpf_sem_mascara[$a] * $b;
    				$b--;
    				
    			}
    
    			$resto_1 = array_sum($digito_1) % 11;
    			$resultado_1 = 11 - $resto_1;
    
    			if($resultado_1 <= 9){
    
    				$dv_1 = $resultado_1;
    
    			}else{
    
    				$dv_1 = 0;
    
    			}
    
    		#}
    
    		#Dígito nverificador 2:{
    
    			$cpf_com_dv_1 = $cpf_sem_mascara . $dv_1;
    			$c;
    			$d = 11;
    
    			for($c = 0; $c < 10; $c++){
    				
    				$digito_2[$c] = $cpf_com_dv_1[$c] * $d;
    				$d--;
    				
    			}
    
    			$resto_2 = array_sum($digito_2) % 11;
    			$resultado_2 = 11 - $resto_2;
    
    			if($resultado_2 <= 9){
    
    				$dv_2 = $resultado_2;
    
    			}else{
    
    				$dv_2 = 0;
    
    			}
    
    		#}
    
    		$dv = $dv_1 . $dv_2;
    
    		if($cpf_dv_enviado == $dv){
    			
    			return true;
    
    		}else{
    
    			return false;
    
    		}
		    
		}

	}

	$verificacao = testa_cpf($cpf);
    $erros = array(false, false, false, false);
    $erros[0] = !$verificacao;
    
    $sqlCPF = "SELECT * FROM doador WHERE CPFD = '$cpf';";
    $queryCPF = mysqli_query($con, $sqlCPF);
    $rowsCPF = mysqli_num_rows($queryCPF);
    
    $erros[1] = $rowsCPF !== 0;
    
    $sqlLOG = "SELECT * FROM doador WHERE LoginD = '$login';";
    $queryLOG = mysqli_query($con, $sqlLOG);
    $rowsLOG = mysqli_num_rows($queryLOG);
    
    $erros[2] = $rowsLOG !== 0;
    
    $sqlMAIL = "SELECT * FROM doador WHERE EmailD = '$email';";
    $queryMAIL = mysqli_query($con, $sqlMAIL);
    $rowsMAIL = mysqli_num_rows($queryMAIL);
    
    $erros[3] = $rowsMAIL !== 0;
	if(!in_array(true, $erros)){
	
		$sqldoador = "INSERT INTO doador VALUES (NULL, '$nome', '$email', md5('{$senha}'),'$cpf', '$rg', '$cidade','$estado', '$telefone', '$login');";
		$querydoador = mysqli_query($con, $sqldoador);

		if($querydoador){

			header('location: login.html');
			exit();

		} else{
			
		    print "<script>
		    
		        alert('Erro desconhecido, verifique se você preencheu todos os campos e tente novamente');
		        location.href = 'Doador.html';
		    
		    </script>";
			
		}	
		
	} else{
	    
	    $relatorio = array("", "", "", "");
	    $relatorio[0] = $erros[0] ? "CPF inválido!" : "";
	    $relatorio[1] = $erros[1] ? "Já existe um usuário com este CPF!" : "";
	    $relatorio[2] = $erros[2] ? "Já existe um usuário com este login!" : "";
	    $relatorio[3] = $erros[3] ? "Já existe um usuário com este e-mail!" : "";
	    $rel = implode(' ', $relatorio);
	    
		print "<script>
		    
		        alert('$rel');
		        location.href = 'Doador.html';
		    
		    </script>";
		
	}

?>