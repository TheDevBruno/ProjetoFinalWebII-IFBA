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

    
    <title>Tela de Cadastro</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Cadastro Produtos</h1>
                <form action="../includes/Produtos_script.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="produto">Produto</label>
                        <input type="text" class="form-control" name="produto" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descricão</label>
                        <input type="text" class="form-control" name="descricao">
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="text" class="form-control" name="preco">
                    </div>
                    <div class="form-group">
                        <label for="estoque">Quantidade Estoque</label>
                        <input type="number" class="form-control" name="estoque" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status" required>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <input type="file" class="form-control" name="imagem" accept="image/*">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                        <a href="../includes/ListaProdutos.php" class="btn btn-info">Cancelar</a>  
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