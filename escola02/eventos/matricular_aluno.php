<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Matrículas</title>
</head>
<body>
    <?php 
    
    $id = $_GET["id"]; // id do curso

    // Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Consultar dados na tabela 'cursos'
    
    $sql = "SELECT descricao FROM cursos WHERE id=$id";
    // echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    $curso = mysqli_fetch_array($resultado);
    echo "<p>Curso: $curso[descricao]";

    // Consultar matrículas efetuadas

    $sql = "SELECT id,nome FROM alunos,matriculas WHERE id=id_aluno AND id_curso=$id";
    // echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    
    echo "<p><table>";
    echo "<tr><td>Cursos matriculados:</td></tr>";
    while($aluno = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>$aluno[nome]</td>";
        echo "</tr>";
    }
    echo "</table>";

    $sql = "SELECT id,nome FROM alunos";
    // echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    
    echo "<p><table>";
    echo "<tr><td>Alunos disponíveis:</td></tr>";
    while($aluno = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>$aluno[id]</td>";
        echo "<td>$aluno[nome]</td>";
        echo "<td><a href='efetivar_matricula.php?id_aluno=$aluno[id]&id_curso=$id'> Matricular </a></td>";
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