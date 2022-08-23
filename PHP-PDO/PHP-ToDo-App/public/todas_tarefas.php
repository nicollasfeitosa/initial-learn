<?php

	if ($_POST) {
		$pesquisa = filter_input_array(INPUT_POST, $_POST, FILTER_SANITIZE_STRING);
		//var_dump($pesquisa);
		//echo $pesquisa['pesquisa'];

		$termo = $pesquisa['pesquisa'];

		$termo = '%'.$termo.'%';

		$acao = 'pesquisar';

		require_once 'tarefa_controller.php';
		//var_dump($tarefas);
		
	} else {
		
		$acao = 'recuperar';

		require_once 'tarefa_controller.php';

	}

?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item active"><a href="#">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas tarefas</h4>
								<form action="" method="POST">
									<div class="form-row">
										<div class="col-md-10">
											<input class="form-control" type="text" name="pesquisa" placeholder="Pesquisa">
										</div>
										<div class="col-md-2">
											<button class="btn btn-secondary" type="submit">Pesquisar</button>
										</div>
									</div>
								</form>
								<hr />

								<?php foreach ($tarefas as $indice => $tarefa) { ?>
								
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9" id="tarefa_<?=$tarefa->id?>">
										<?php
											$badge = 'warning';

											if ($tarefa->status == 'realizado') {
												$badge = 'success';
											}
										
										?>

										<?= $tarefa->tarefa ?> <span class="badge badge-<?=$badge?>"> <?= ucfirst($tarefa->status) ?> </span>
									</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">	
											
											<i class="click fas fa-trash-alt fa-lg text-danger" onclick="remover(<?=$tarefa->id?>)"></i>
											
											<?php if ($tarefa->status == 'pendente') { ?>

											<i class="click fas fa-edit fa-lg text-info" onclick="editar(<?=$tarefa->id?>, '<?= $tarefa->tarefa ?>')"></i>
											<i class="click fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>

											<?php }?>
										</div>
								</div>

								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
											
		<!-- JavaScript -->
        <script src="js/ajax.js"></script>
        <script src="js/functions.js"></script>

	</body>
	
</html>
