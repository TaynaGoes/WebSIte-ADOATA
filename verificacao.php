<?php

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