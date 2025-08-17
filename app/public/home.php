<?php 
    session_start();
    include "controllers/validar.php"; 
?>
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
        <div class="row justify-content-center">
            <div class="col-md-10">

                <!-- Botão de logout/login -->
                <div class="mb-3 text-end">
                    <a href="../login.php" class="btn btn-outline-success">Login</a>
                    <a href="../controllers/Logout.php" class="btn btn-outline-danger">Sair</a>
                </div>

                <!-- Card principal -->
                <div class="card text-center">
                    <h1 class="card-header">Sistema Web</h1>
                    <div class="card-body">
                        <h5 class="card-title">Sistema de Cadastro</h5>
                        <p class="card-text">Projeto desenvolvido como base de estudo para a disciplina de Informática | Web II.</p>
                        
                        <!-- Seção de Clientes -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card p-3">
                                    <h4 class="card-title">Clientes</h4>
                                    <a href="../public/cadastroPessoas.php" class="btn btn-primary mb-2">Cadastrar Cliente</a>
                                    <a href="../includes/ListaPessoas.php" class="btn btn-secondary">Clientes Cadastrados</a>
                                </div>
                            </div>

                            <!-- Seção de Produtos -->
                            <div class="col-md-6">
                                <div class="card p-3">
                                    <h4 class="card-title">Produtos</h4>
                                    <a href="../public/cadastro_Produtos.php" class="btn btn-primary mb-2">Cadastrar Produto</a>
                                    <a href="../includes/ListaProdutos.php" class="btn btn-secondary">Produtos Cadastrados</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rodapé -->
                    <div class="card-footer text-body-secondary">
                        Sistema criado por @BrunoSilva
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
