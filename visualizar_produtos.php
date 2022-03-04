<?php

    session_start();
    include_once ('conexao/conectar.php');
    if(!(isset($_SESSION['beneficiado']) || isset($_SESSION['doador']))){
    
        header('location: login.html');
        exit();
    
    } else{

        $sql = "SELECT * FROM produto;";
        $query = mysqli_query($con, $sql);

    }

?>
<DOCTYPE!>
<html>
<head>
<!-- CSS navbar-->

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
<!--===============================================================================================-->
		
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
	line-height: 0.5;
	padding: 0 10px;
}

body{
	background-color: white;
}


    h1{
     
    margin: auto;
	font-family: 'pacificoregular', cursive;
    color: green;
    font-size: 50px;
    text-align: center;
    }

    h1:hover {
        color: black;
    }   
    }

</style>
    
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
<a href="#login.html">LOGIN</a>
<label for="chk" class="hide-menu-btn">
<i class="fas fa-times"></i>
</label>
</ul>
</div>


<body>
  
<center>



<div class="pequena">
	<span class="label-input100"></span> <br>
        <select name="estado" class="selectclass" id="txtPesquisa">
            <option value="">Selecione uma categoria</option>   
		    <option value="Brinquedos">Brinquedos</option>
		    <option value="CestasBásicas">Cestas Básicas</option>
		    <option value="MateriaisEscolares">Materiais Escolares</option>
		    <option value="Roupas">Roupas</option>
        </select>
    </div>
</center>
  
<div class="col-md-12">
<div class="table-responsive">

            <table class="table table-striped table-dark" id="tblClientes">

                <thead>

                    <tr>

                    <th scope="col">Produto</th>
                    <th scope="col">Data Enviada</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Foto</th> <!-- Click no link ahref e abrir a imagem-->

                    </tr>
                
                </thead>
                <tbody>

                <?php
                
                while ($exibir = mysqli_fetch_array($query)) {

                    $id = $exibir[0];
                    $nome = $exibir[1];
                    $data = $exibir[2];
                    $categoria = $exibir[3];
                    $qtd = $exibir[4];
                    $foto = $exibir[5];
                    $desc = $exibir[6];
                    $id_doador = $exibir[7];
                    
                    $data_old_array = explode("-", $data);
                    $data_array_new = array($data_old_array[2], $data_old_array[1], $data_old_array[0]);
                    $data_new = implode("/", $data_array_new);
                    
                    $sql_doador = "SELECT TelD, CidadeD FROM doador WHERE IDD = '$id_doador';";
                    $query_doador = mysqli_query($con, $sql_doador);
                    $dados_doador = mysqli_fetch_array($query_doador);
                    $tel = $dados_doador[0];
                    $cid = $dados_doador[1];

            ?>

<tr>

<td><?php print $nome; ?></td>
<td><?php print $data_new; ?></td>
<td><?php print $categoria; ?></td>
<td><?php print $qtd; ?></td>
<td><?php print $tel; ?></td>
<td><?php print $cid; ?></td>
<td><?php print $desc; ?></td>
<td style=""><a href="<?php print $foto; ?>" target="blank"><img src="<?php print $foto; ?>" style="max-width: 30%"></a></td>

</tr>

<?php
                
                    }
                
                ?>

                </tbody>
                    </div>
                    </div>

                    <script
      src="https://code.jquery.com/jquery-3.5.0.slim.min.js"
      integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs=" crossorigin="anonymous">
  </script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    $(document).ready(function(){
      $("#txtPesquisa").on("change", function() {
        var value = $(this).val().toLowerCase();
        $("#tblClientes tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
  
 
</body>

  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
</html>