<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Matrículas</title>
</head>
<body>
    <?php 
    
    // Recebe os dados do formulário 

    $id = $_GET["id"];

    // Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Consultar dados na tabela 'alunos'
    
    $sql = "SELECT nome FROM alunos WHERE id=$id";
    // echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    $aluno = mysqli_fetch_array($resultado);
    echo "<p>Aluno: $aluno[nome]";

    // Consultar matrículas efetuadas

    $sql = "SELECT id,descricao FROM cursos,matriculas WHERE id=id_curso AND id_aluno=$id";
    // echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    
    echo "<p><table>";
    echo "<tr><td>Cursos matriculados:</td></tr>";
    while($curso = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>$curso[descricao]</td>";
        echo "</tr>";
    }
    echo "</table>";

    $sql = "SELECT id,descricao FROM cursos";
    // echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    
    echo "<p><table>";
    echo "<tr><td>Cursos disponíveis:</td></tr>";
    while($curso = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>$curso[id]</td>";
        echo "<td>$curso[descricao]</td>";
        echo "<td><a href='efetivar_matricula.php?id_aluno=$id&id_curso=$curso[id]'> Matricular </a></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Fecha a conexão com o banco
    mysqli_close($conexao);

    ?>
    <p><a href="listar_alunos.php">Volta para o cadastro de alunos</a> 
    <p><a href="../index.php">Volta para a página princial</a>
</body>
</html>