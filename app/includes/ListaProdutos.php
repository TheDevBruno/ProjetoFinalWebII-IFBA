<?php 
    session_start();
//    include "controllers/validar.php"; 
    $usuario = $_COOKIE['usuario'] ?? 'Visitante';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    
    <title>Produtos</title>
</head>
<body>    

<?php
    $pesquisa = $_POST['busca'] ?? '';

    include '../config/conexao.php';
    $sqlPesquisa = "SELECT * FROM produtos where produto LIKE '%$pesquisa%' ";


    $dados = mysqli_query($conn, $sqlPesquisa);

?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="mb-3 text-end">
                <span>Bem-vindo, <?php echo htmlspecialchars($usuario); ?>!</span>
                <a href="../login.php" class="btn btn-outline-success">Login</a>
                <a href="../controllers/Logout.php" class="btn btn-outline-danger">Sair</a>
            </div>  

            <h1 class="text-center">Produtos</h1>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex" action="ListaProdutos.php" method="POST">
                        <input class="form-control me-2" type="search" placeholder="..." aria-label="Search" name="busca" autofocus/>
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </div>
            </nav>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" >Imagem</th>
                        <th scope="col" >Produto</th>
                        <th scope="col" >Descricao</th>
                        <th scope="col" >Status</th>
                        <th scope="col" >Preço</th>
                        <th scope="col" >Quantidade Estoque</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($linha = mysqli_fetch_assoc($dados)){
                            $cod_produto = $linha['id_produto'];
                            $produto = $linha['produto'];
                            $descricao = $linha['descricao'];
                            $status = $linha['status'];
                            $preco = $linha['preco'];
                            $estoque = $linha['estoque'];
                            $imagem = $linha['imagem'];
                            if(!$imagem == null){
                                $mostra_foto = "<img src='../../app/assets/img/produtos/$imagem' class='lista_foto'>";
                            }else{
                                $mostra_foto = '';
                            }

                        echo "<tr>
                                <th>$mostra_foto</th>
                                <th scope='row'>$produto</th>
                                <td>$descricao</td>
                                <td>$status</td>
                                <td>$preco</td>
                                <td>$estoque</td>
                                <td width=150px> 
                                    <a href='editar_produtos.php?id=$cod_produto' class='btn btn-success btn-sm'> Editar </a>
                                    <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                                    onclick=" .'"' . "pegar_dados($cod_produto, '$produto')" . '"' ."> Excluir </a>
                                </td>
                            </tr>"; 
                        }
                    ?>
                    <a href="../public/home.php"     class="btn btn-info">Voltar para o inicio</a>  
                    <a href="../public/cadastro_Produtos.php"  class="btn btn-primary">Novo Cadastro</a>
                </tbody>
            </table>
        </div>
    </div>       
</div>

<!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">confirmação de exclusão </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="excluir_script.php" method="POST">
                    <p>Deseja excluir <b id="nome_pessoa"> Nome da pessoa</b>?</p> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <input type="hidden" name="id" id="cod_pessoa" value="">
                        <input type="hidden" name="nome" id="nome_pessoa_exluir" value="">
                        <input type="submit" class="btn btn-primary" value="Sim">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript"> //Codigo javascript pegar os dados para Modal confirmar exclusão 
        function pegar_dados(id, nome){
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('nome_pessoa_exluir').innerHTML = nome;
            document.getElementById('cod_pessoa').value = id;
        }
    </script>


    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>

</script>
</body>
</html>