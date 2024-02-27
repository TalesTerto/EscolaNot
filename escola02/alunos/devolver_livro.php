<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devolver livro</title>
</head>
<body>
    devolver livro</p>

    <?php 
    
    // Recebe os dados do formulário 

    $id_aluno = $_GET["id_aluno"];
    $id_livro = $_GET["id_livro"];

    // Conexão com o banco de dados

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Inclui na tabela 'emprestimos'

    $sql = "DELETE FROM emprestimos WHERE id_aluno='$id_nome' END id_livro='$id_livro'";
    // echo $sql;

    if(mysqli_query($conexao, $sql)){
        echo "<p>Devolução realizada com sucesso";
    } else {
        echo "<p>Erro ao devolver livro";
    }

    // Fecha a conexão com o banco
    
    mysqli_close($conexao);
    ?>
    <p><a href="listar_livros.php">Volta para o cadastro de livros</a>
    <p><a href="../index.php">Volta para a página principal</a>
</body>
</html>