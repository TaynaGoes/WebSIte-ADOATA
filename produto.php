<?php

    session_start();
    if(!isset($_SESSION['doador'])){

        header('location: login.html');
        exit();
 
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <style>

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    
    </style>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Doação</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    
    <!-- CSS navbar-->
		
<link rel="shortcut icon" href="assets/ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="stylesheet" href="fonts/font/stylesheet.css">
<link rel="stylesheet" href="fonts/raleway-css/stylesheet.css">

<style>
@font-face {
	font-family: 'ralewaysemibold';
	src: url('raleway-semibold-webfont.woff2') format('woff2'),
	url('raleway-semibold-webfont.woff') format('woff');
	font-weight: normal;
	font-style: normal;
}

a{
	font-family: 'ralewaysemibold';
	font-size: 14px;
	line-height: 1.7;
	padding: 0 10px;
}

body{
	background-color: #1f1f1f;
}

</style>

<!-- CSS navbar-->
<!-- CSS navbar-->
		
<link rel="shortcut icon" href="assets/ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="stylesheet" href="fonts/font/stylesheet.css">
<link rel="stylesheet" href="fonts/raleway-css/stylesheet.css">

<style>
@font-face {
	font-family: 'ralewaysemibold';
	src: url('raleway-semibold-webfont.woff2') format('woff2'),
	url('raleway-semibold-webfont.woff') format('woff');
	font-weight: normal;
	font-style: normal;
}

a{
	font-family: 'ralewaysemibold';
	font-size: 14px;
	line-height: 1.7;
	padding: 0 10px;
}

body{
	
}
</style>

<!-- CSS navbar-->

</head>
<body>

<!--navbar-->
<div class="header">
<!--botao com funçao de esconder uma div inteira-->
<input type="checkbox" id="chk" onclick="toggleEstado('container')"><!--o id da div vai ali onde esta 'container'-->
<!---->
<label for="chk" class="show-menu-btn">
<i class="fas fa-ellipsis-h"></i>
</label>

<a href="index.html" class="navbar-brand">Adoata</a>
<ul class="menu">
<a href="index.html#top-content">HOME</a>
<a href="index1.html">SEJA MEMBRO</a>
<a href="#">LOGIN</a>
<label for="chk" class="hide-menu-btn">
<i class="fas fa-times"></i>
</label>
</ul>
</div>

</head>



<body bgcolor="green;">

    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">

        <div class="wrapper wrapper--w780">
    
            <div class="card card-3">

                <div class="card-heading"></div>
                <div class="card-body" >
        
                    <center>  
                        
                        <h2 class="title" >  Efetuar Doações  </h2> 
                    
                    </center><br>
 
                    <form method="POST" enctype="multipart/form-data" action="produtodb.php">

                        <div class="input-group">

                            <input required class="input--style-3" type="text" placeholder="Nome do Produto" name="nome">
    
                        </div>

                        <div class="input-group">

                            <input required class="input--style-3 js-datepicker" type="text" placeholder="Data Enviada" id="data" name="data">
    
                        </div>

                        <div class="input-group">
    
                            <div class="rs-select2 js-select-simple select--no-search">
        
                                <select required name="categoria" style="width: 100%; border: none; margin-left: -4px;" class="input--style-3">
            
                                    <option disabled="disabled" selected="selected" style="color: #999;">Categoria</option>
                                    <option value="Materiais Escolares" style="color: black;">Materiais Escolares</option>
                                    <option value="Brinquedos" style="color: black;">Brinquedos</option>
                                    <option value="Cestas Básicas" style="color: black;">Cestas Básicas</option>
                                    <option value="Roupas" style="color: black;">Roupas</option>

                                </select>

                            </div>
    
                        </div>
                        <div class="input-group">

                            <input required class="input--style-3" type="number" autocomplete="none" placeholder="Quantidade" name="qtd">
    
                        </div>
                        <div class="input-group" style="border: 1px solid #333;">

                            <textarea required style="outline: none; border-color: transparent; resize: none; font-family: inherit; padding: 5px; width: 100%;" spellcheck class="input--style-3" placeholder="Descrição do Produto" name="desc"></textarea> 
                        
                        </div>
                        <div class="input-group">

                            <input required type="file" onchange="imagem()" accept=".png, .jpg, .jpeg" id="foto" style="display: none;" name="foto">
                            <label for="foto" style="letter-spacing: 1px;" id="foto_label" class="input--style-3">Selecione uma imagem</label>
    
                        </div>
                        <div class="p-t-10">

                            <center> 
                                
                                <button class="btn btn--pill btn--green" type="submit">Enviar Produto</button> 
                            
                            </center>
    
                        </div>
    
                    </form>
    
                </div>
    
            </div>
    
        </div>
    
    </div>

    <script>

        function imagem() {
            
            var t = document.getElementById("foto");;
            var r = document.getElementById("foto_label");

            if(t.files.length > 0){

                var size = ((t.files[0].size / 1024).toFixed(2)).replace(".", ",");                
                r.innerHTML = "Arquivo: ".bold() + t.files[0].name + "<br>Tamanho: ".bold() + size + " KB";
            
            } else{

                r.innerText = "Selecione uma imagem";

            }

        }

    </script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script>
    
        jQuery(function($){
        
            $("#data").mask("99/99/9999");
            $("#cpf").mask("999.999.999-99");
            $("#cep").mask("99999-999");
            $("#uf").mask("AA");
   
        });
        $(document).ready(function(){
  
            var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };
            $("#fone").mask(SPMaskBehavior, spOptions);	
    
        })
    
    </script>
    <script src="library/js/jquery.mask.min.js" type="text/javascript"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->