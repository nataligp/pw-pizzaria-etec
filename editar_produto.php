<?php
require_once("ControllerProdutos.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<meta name="color-scheme" content="light dark"> 
	<link rel="stylesheet" href="bootstrap/css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<title>Pizzaria</title>
</head> 
<body> 
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
				<a class="navbar-brand">Editar produtos</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="cadastrar_produto.php">Cadastrar</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
						<?php
							$controller = new ControllerProdutos();
							$resultado = $controller->listar_produtos($_GET['id']);
							//print_r($resultado);
						?>
						<form method="post" action="ControllerProdutos.php?funcao=editar_produtos&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form" enctype="multipart/form-data">
						<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtNome" id="txtNome" value="<?php echo $resultado[0]['nome']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Descrição:</label>
								<input type="text" class="form-control" name="txtDescricao" id="txtDescricao" value="<?php echo $resultado[0]['descricao']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Preço:</label>
								<input type="text" class="form-control" required name="txtPreco" id="txtPreco" value="<?php echo $resultado[0]['preco']; ?>">
							</div>
							<div class="form-group">
								<label for="img">Imagem:</label>
								<input type="file" class="form-control" name="imagem">
                            </div>
							<button type="submit" id="btnInserir" class="btn btn-primary">Editar</button>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
