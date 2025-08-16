<?php include __DIR__ . '/../controllers/validar-login.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    
    <title>Empresa</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <form class="d-flex" action="../../Login.php" method="POST">
                <button class="btn btn-outline-success" type="submit">Login</button>
            </form>
            <div class="card-body">
                <div class="card text-center">
                <h1 class="card-header text-center">Sistema Web</h1>
                    <h5 class="card-title">Este é um sistema simplificado de cadastro</h5>
                    <p class="card-text">Base de estudo para entrega do projeto do curso de informataica | Web II</p>
            </div>
            <div class="card-box">
                <div class="multi-card row">    
                    <h4 class="text-center card-title">Clientes</h4>
                    <a href="cadastroPessoas.php" width="120px" class="btn btn-primary">Cadastrar Cliente</a>
                    <a href="../includes/ListaPessoas.php" width="120px" class="btn btn-primary">Clientes Cadastrados</a>
                </div>
                <div class="multi-card row">    
                    <h4 class="text-center card-title">Produtos</h4>
                    <a href="../public/cadastro_Produtos.php" width="120px" class="btn btn-primary">Cadastrar Produto</a>
                    <a href="../includes/ListaProdutos.php" width="120px" class="btn btn-primary">Produtos Cadastrados</a>
                </div>
            </div>
            <div class="card-footer text-body-secondary">
                Sistema criado por @BrunoSilva
            </div>
        </div>
    </div>
    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>

</script>
</body>
</html>