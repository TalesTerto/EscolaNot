<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclui Aluno</title>
</head>
<body>
    <?php 
    
    //Receber dados do formulário

    $id = $_GET["id"];

    // Conexão com o banco de dados

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Consultar dados na tabela 'clientes'
    
    $sql = "DELETE FROM alunos WHERE id=$id";
    echo $sql;

    $resultado = mysqli_query($conexao, $sql);

    // Fecha a conexão com o banco

    mysqli_close($conexao);

    ?>
    
    <p><a href="alunos.php">livros</a><br>
    <p><a href="../index.php">Volta para a página princial</a>
</body>
</html>