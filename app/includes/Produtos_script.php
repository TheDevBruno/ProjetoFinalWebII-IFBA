<?php 
    session_start();
    //include "controllers/validar.php"; 
    $usuario = $_COOKIE['usuario'] ?? 'Visitante';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">

    <title>Cadastro</title>
</head>
<body>
    <div class="row_confirma_cadastro" >
        <div class="mostrar_cadasto">
            <?php
                include '../config/conexao.php';

                    $produto = $_POST['produto'];
                    $descricao = $_POST['descricao'];
                    $preco = $_POST['preco'];
                    $estoque = $_POST['estoque'];
                    $status = $_POST['status'];
                    $imagem = $_FILES['imagem'];
                    $imagem_nome = basename($imagem['name']);
                    $imagem_destino = "../assets/img/produtos/" . $imagem_nome;
                    if (move_uploaded_file($imagem['tmp_name'], $imagem_destino)) {
                    } else {
                        $imagem_nome = "";
                    }

                    $sqlInsert = "INSERT INTO `produtos`(`produto`, `descricao`, `preco`, `estoque`, `status`, `imagem`)
                                    VALUES ('$produto','$descricao','$preco','$estoque','$status', '$imagem_nome')";

                    if(mysqli_query($conn , $sqlInsert)){
                        if (!empty($imagem_nome)){
                            echo "<img src='../assets/img/produtos/$imagem_nome' title='$imagem_nome' class='mostra_foto foto_produto'>";
                        }
                        mensagem("$produto cadastrado com sucesso!", 'success');
                    }else{
                        mensagem("$produto NÃO foi cadastrado!", 'danger');   
                    }
            ?>
        </div>
        <a href="../includes/ListaProdutos.php" class="btn btn-primary">Voltar</a>
    </div>
    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

