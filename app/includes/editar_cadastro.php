<?php 
    session_start();
    include "controllers/validar.php"; 
    $usuario = $_COOKIE['usuario'] ?? 'Visitante';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    
    <title>Tela de Cadastro</title>
</head>
<body>

    <?php
        include '../config/conexao.php';
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);

    ?>



    <div class="container mt-5">
        <div class="row">  
            <div class="col">
                <div class="mb-3 text-end">
                    <span>Bem-vindo, <?php echo htmlspecialchars($usuario); ?>!</span>
                    <a href="../login.php" class="btn btn-outline-success">Login</a>
                    <a href="../controllers/Logout.php" class="btn btn-outline-danger">Sair</a>
                </div>  
                <h1 class="text-center">Alterar Cadastro Cliente</h1>
                <form action="edit_script.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required value= <?php echo $linha['nome']; ?>>
                    </div>
                    <div class="form-group">
                        <label for="">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value= <?php echo $linha['endereco']; ?>>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value= <?php echo $linha['telefone']; ?>>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required value= <?php echo $linha['email']; ?>>
                    </div>
                    <div class="form-group">
                        <label for="data">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" value= <?php echo $linha['data_nascimento']; ?>>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'] ?>">                        
                        <a href="../includes/ListaPessoas.php" class="btn btn-primary">Voltar</a>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

</script>
</body>
</html>