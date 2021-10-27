<?php
require_once("controller/ControllerCadastro.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">

    <script src="cordova.js"></script>
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/consulta.js"></script>
    <script>
        function confirmDelete(delUrl) {
            if(confirm("Deseja apagar o registro?")) {
                document.location = delUrl;
            }
        }
    </script>

    <title>Consulta de Clientes</title>
</head>

<body>
    <div class="container">
        <div class="row" id="top" align="center">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12 h-100">
                <a class="navbar-brand">Consulta de Clientes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Cadastrar<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="consClientes.php">Consultar</a>
						</li>
					</ul>
				</div>
            </nav>
        </div>

        <div class="row">
            <div class="card mb-3 col-12">
                <div class="card-body">
                    <h5 class="card-title">Consultar - Contatos Agendados</h5>
                    <table class="table table-hover col-12">
                        <thead class=" table active bg-primary thead-dark">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Origem</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Observação</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        
						<tbody id="TableData">
						<?php
							$controller = new ControllerCadastro();
							$resultado = $controller->listar(0);
							for($i=0;$i<count($resultado);$i++){ 
						?>
								<tr>
									<td scope="col"><?php echo $resultado[$i]['nome']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['telefone']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['origem']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['data_contato']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['obs']; ?></td>
									<td scope="col">
										<button type="button" class="btn btn-outline-primary" onclick="location.href='ediClientes.php?id=<?php echo $resultado[$i]['id']; ?>'">Editar</button>
										<button type="button" class="btn btn-outline-primary" onclick="javascript:confirmDelete('excClientes.php?id=<?php echo $resultado[$i]['id']; ?>')">Excluir</button>
									</td>
								</tr>
						<?php
							}
						?>
						</tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</body>

</html>