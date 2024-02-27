<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo de livro</title>
</head>
<body>
    Emprestar livro</p>

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

    $sql = "INSERT INTO emprestimos (id_aluno,id_livro) VALUES ('$id_aluno','$id_livro')";
    // echo $sql;

    if(mysqli_query($conexao, $sql)){
        echo "<p>Empréstimo realizado com sucesso";
    } else {
        echo "<p>Erro ao emprestar livro";
    }

    // Fecha a conexão com o banco
    
    mysqli_close($conexao);
    ?>
    <p><a href='listar_emprestimo.php'>Volta para o cadastro de livros</a>
    <p><a href="../index.php">Volta para a página principal</a>
</body>
</html>