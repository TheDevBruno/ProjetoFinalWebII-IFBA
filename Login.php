
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./app/assets/css/estilo.css">

    <title>Login - Sistema Web</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h1 class="card-header text-center">Login</h1>
                    <form class="d-flex" action="./app/public/index.php" method="POST">
                        <button class="btn btn-outline-success" type="submit">inicio</button>
                    </form>
                    <div class="card-body">
                        <form action="../controllers/validar-login.php" method="POST">
                            <div class="form-group mb-3"> 
                                <label for="usuario">Usuário</label>
                                <input type="text" class="form-control" name="usuario" required>
                                <small name='usuario' class="form-text text-muted">Entre com seus dados de acesso</small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" name="senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        </form>
                    </div>
                    <?php
                        if( isset($_POST['login'])) {
                            $login = $_POST['login'];
                            $senha = $_POST['senha'];
                            if( ($login == "admin") and ($senha == "admin")) {
                                header("location: app");
                            }else{
                                echo "Login Invalido!";
                            }
                        }
                    ?>



                    <!--footer-->
                    <div class="card-footer text-body-secondary text-center">
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