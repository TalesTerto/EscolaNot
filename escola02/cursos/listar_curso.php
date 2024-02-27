<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cadastro de Cursos</title>
</head>
<body>
Listar Cadastro de Cursos

    <?php 

    // Conexão com o banco de dados

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Consultar dados na tabela 'alunos'

    $sql = "SELECT id, descricao FROM cursos";
    $resultado = mysqli_query($conexao, $sql);
    
    echo "<table>";
    while ($curso = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>$curso[id]</td>";
        echo "<td>$curso[descricao]</td>";
        echo "<td><a href='matricular_aluno.php?id=$curso[id]'>Matricular</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Fecha a conexão com o banco
    
    mysqli_close($conexao);
    ?>

    <p><a href="cadastro_alunos.php">Incluir novo aluno</a></p>
    <p><a href="../index.php">Voltar para a página principal</a></p>
</body>
</html>
