<?php
	session_start();
 
	$produtos = $_SESSION['produtos'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <title>Desafio Incluir</title>

    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Barra navegação -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">Alternar Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span style="color: red; font-size: 50px" class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">


          <ul class="nav navbar-nav navbar-right">
            <li> <a href="../../home.php" data-toggle="tooltip" data-placement="bottom" title="Home"><span style="font-size: 25px" class="glyphicon glyphicon-home" aria-hidden="true"></span></a> </li>
            <li class="dropdown"> 
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Listas <span class="caret"></span>
              </a> 
              <ul class="dropdown-menu">
                <li> <a href="../../controller/validarConsultaFrutas.php">Frutas</a> </li>
                <li> <a href="../../controller/validarConsultaLegumes.php">Legumes</a> </li>
                <li> <a href="../../controller/validarConsultaVerduras.php">Verduras</a> </li>
              </ul>
            </li>

            
            <li> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pesquisar"><span style="font-size: 25px" class="glyphicon glyphicon-search" aria-hidden="true"></span></a> </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
    <div class="container">
      <div class="page-header" align="center">
        <img class="img-responsive" src="../../img/logo.png" width="25%" height="auto">
	  </div>
	<h2 style="text-align: center"> Lista de Produtos</h2>
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th class="text-center">Id Produto</th>
					<th class="text-center">Nome</th>
					<th class="text-center">Qtd Escolhida</th>
					<th class="text-center">Sub Total</th>
				</tr>
			</thead>
			<tbody class="text-center">
				<form action="../../controller/validarVenda.php" method="post">
					<?php
						
						$i = 0;
						foreach ($_POST['qtd_compra'] as $qtdCompra){
							$quantidadeCompra = (int) $qtdCompra;
							$precoTotal = 0;
							if ($quantidadeCompra > 0) {
								echo "<tr><td><input type='hidden' name='id[]' value='".$_POST['id'][$i]."'>".$_POST['id'][$i]."</td>"; // id
								$quantidade = $_POST['qtd'][$i];
								$novaQtd = $quantidade - $quantidadeCompra;
								echo "<input type='hidden' name='novaQtd[]' value='".$novaQtd."'>";
								echo "<td>".$_POST['nome'][$i]."</td>";
						    	echo "<td>".$quantidadeCompra."</td>";
						    	$preco = (float)$_POST['preco'][$i];
						    	$subTotal = (float)($preco * $quantidadeCompra);
						    	echo "<td>R$ ".$subTotal."</td></tr>";
							}
							$precoTotal = $precoTotal + $subTotal;
					 		$i++;
						}	
					?>
					<tr><td colspan="3" class="text-right">Preço Total:</td><td colspan="1">R$ <?php echo $precoTotal; ?></td></tr>
					<tr><td colspan="4"><a href="../../home.php" class="btn btn-warning">Voltar</a>  <button type="submit" name="Confirmar" class="btn btn-success">Confirmar</button></td></tr>
				</form>
			</tbody>
		</table>
	</div>
	</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../../bootstrap/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>
</html>