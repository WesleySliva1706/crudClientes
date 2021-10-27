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
    <script src="js/index.js"></script>

    <title>Cadastro de Clientes</title>
</head>

<body>
    <div class="container">
        <div class="row" id="top" align="center">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12 h-100">
                <a class="navbar-brand">Cadastro de Clientes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consClientes.html">Consultar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="card mb-3 col-12">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
                    <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
                    <form method="post" action="controller/ControllerCadastro.php" id="form" name="form">
                        
                        <div class="form-group">

                            <label class="my-2">Nome: *</label>
                            <input type="text" required="" class="form-control" id="txtNome" name="txtNome">

                            <label class="my-2">Telefone: *</label>
                            <input type="text" required="" name="txtTelefone" class="form-control" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">

                            <label class="my-2">Origem: *</label>
                            <select required="" name="txtOrigem" class="form-control" id="txtOrigem">
                                <option>Celular</option>
                                <option>Fixo</option>
                                <option>Whatsapp</option>
                                <option>Facebook</option>
                                <option>Instagram</option>
                                <option>Google Meu Negocio</option>
                            </select>

                            <label class="my-2">Data de Contato: *</label>
                            <input type="date" required="" name="txtData" class="form-control" id="txtData">

                            <label class="my-2">Observação</label>
                            <textarea required="" name="txtObs" class="form-control" id="txtObs" rows="3"></textarea>

                            <p class="card-text">* - Campo Obrigatório</p>

                            <button type="submit" class="btn my-2">Cadastrar</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>

</body>

</html>