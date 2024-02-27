<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efetivar matrícula</title>
</head>
<body>
    Efetivar matrícula</p>

    <?php 
    
    // Recebe os dados do formulário 

    $id_aluno = $_GET["id_aluno"];
    $id_curso = $_GET["id_curso"];

    // Conexão com o banco de dados

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Inclui na tabela 'matriculas'

    $sql = "INSERT INTO matriculas (id_aluno,id_curso) VALUES ('$id_aluno','$id_curso')";
    // echo $sql;

    if(mysqli_query($conexao, $sql)){
        echo "<p>Matrícula realizada com sucesso";
    } else {
        echo "<p>Erro ao matricular";
    }

    // Fecha a conexão com o banco
    
    mysqli_close($conexao);
    ?>
    <p><a href="listar_alunos.php">Volta para o cadastro de alunos</a>
    <p><a href="index.php">Volta para a página principal</a>
</body>
</html>