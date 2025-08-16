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
        $sql = "SELECT * FROM produtos WHERE cod_produto = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);

    ?>



    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Alterar Produto</h1>
                <form action="edit_script.php" method="POST">
                    <div class="form-group">
                        <label for="produto">Produto</label>
                        <input type="text" class="form-control" name="produto" required value= <?php echo $linha['produto']; ?>>
                    </div>
                    <div class="form-group">
                        <label for="preco">descricao</label>
                        <input type="text" class="form-control" name="descricao" value= <?php echo $linha['descricao']; ?>>
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="text" class="form-control" name="preco" value= <?php echo $linha['preco']; ?>>
                    </div>
                    <div class="form-group">
                        <label for="estoque">Quantidade Estoque</label>
                        <input type="email" class="form-control" name="estoque" required value= <?php echo $linha['estoque']; ?>>
                    </div>
                    <div class="form-group">
                        <label for="data_cadastro">Data de Cadastro</label>
                        <input type="date" class="form-control" name="data_cadastro" value= <?php echo $linha['data_cadastro']; ?>>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'] ?>">                        
                        <a href="../includes/ListaProdutos.php" class="btn btn-primary">Voltar</a>  
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