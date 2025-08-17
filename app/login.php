<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/estilo.css">

    <title>Login - Sistema Web</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h1 class="card-header text-center">Login</h1>
                    <form class="d-flex" action="./public/home.php" method="POST">
                        <button class="btn btn-outline-success" type="submit">inicio</button>
                    </form>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="form-group mb-3"> 
                                <label for="exampleInputEmail1">Usuário</label>
                                <input type="text" class="form-control" name="login" required>
                                <small name='login' class="form-text text-muted">Entre com seus dados de acesso</small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" name="senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        </form>
                    </div>

                    <?php   
                        if (isset($_POST['login'])) {
                            $login = $_POST['login'];
                            $senha = $_POST['senha'];

                            include "config/conexao.php";
                            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
                            $stmt->bind_param("ss", $login, $senha);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result) {
                                $num_registros = $result->num_rows;
                                if ($num_registros == 1) {
                                    $linha = $result->fetch_assoc();

                                    if (($login == $linha['login']) and ($senha == $linha['senha'])) {
                                        session_start();
                                        $_SESSION['user'] = $login;
                                        setcookie("usuario", $login, time() + 3600, "/");
                                        header("location: public/home.php");
                                        exit();
                                    } else {
                                        echo "Login invalido!";
                                    }
                                } else {
                                    echo "Login ou senha não encontrados ou invalido.";
                                }
                            } else { 
                                echo "Nenhum resultado no Banco de Dados.";
                            }
                            $stmt->close();
                        }
                    ?>
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