<?php

include_once ('conexao/conexao.php');

$sql = "SELECT * FROM cadastro";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  
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

  <script type="text/javascript">

    function form(){

      document.getElementById("edita").submit();

    }

  </script>

</head>

<body style="	background-image: linear-gradient(to bottom, #D3D3D3, #D3D3D3);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">

  <div class="py-5" style="	background-image: linear-gradient(to bottom, #D3D3D3, #D3D3D3);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <h1 class="display-1 text-center"><b>Controle</b>&nbsp;</h1>

        </div>

      </div>

    </div>

  </div>
  <div class="py-5">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div class="table-responsive">

            <table class="table table-striped table-dark">

              <thead>

                <tr>

                  <th scope="col">Nome</th>
                  <th scope="col">RG</th>
                  <th scope="col">Local de Visitação<br></th>
                  <th scope="col">Telefone<br></th>
                  <th scope="col">Permanência</th>
                  <th scope="col">Editar</th>

                </tr>

                <?php

                  while($exibir = mysqli_fetch_array($query)){

                    $id = $exibir[0];
                    $nome = $exibir[1];
                    $rg = $exibir[2];
                    $local = $exibir[3];
                    $tel = $exibir[4];
                    $perm = $exibir[5];

                    $permanencia = $perm == 1 ? "Sim" : "Não";

                ?>

                    <tr>
                      
                      <td><?php print $nome; ?></td>
                      <td><?php print $rg; ?></td>
                      <td><?php print $local; ?></td>
                      <td><?php print $tel; ?></td>
                      <td><?php print $permanencia; ?></td>
                      <td>

                          
                        <a href="perm.php?id=<?php print $id; ?>&perm=<?php print $perm; ?>"  style="height: 100%;">

                            <form>

                              <input type="checkbox" name="predio" <?php if($perm == 1){print "checked='checked'";}?>>

                            </form>

                                                  
                          </a>

                      </td>

                    </tr>

                <?php               

                  }

                ?>

              </thead>

            </table>

          </div>

        </div>

      </div>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>