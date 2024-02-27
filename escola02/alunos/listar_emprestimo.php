<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Empréstimos</title>
</head>
<body>
    <?php 
    $id = $_GET["id"];

    // Conexão com o banco de dados

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Consultar dados na tabela 'alunos'

    $sql = "SELECT nome FROM alunos WHERE id=$id";
    $resultado = mysqli_query($conexao, $sql);
    $aluno = mysqli_fetch_array($resultado);
    echo "<p>Aluno: $aluno[nome]</p>";

    // Consultar livros emprestados

    $sql = "SELECT id,titulo FROM livros,emprestimos WHERE id=id_livro AND id_aluno=$id";
    $resultado = mysqli_query($conexao, $sql);
    
    echo "<table>";
    echo "<tr><td>Livros emprestados:</td></tr>";
    while($livro = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>$livro[titulo]</td>";
        echo "<td><a href='devolver_livro.php?id_aluno=$id&id_livro=$livro[id]'>Devolver</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Consultar livros do acervo da biblioteca

    $sql = "SELECT id, titulo, autor, editora, edicao, ano FROM livros";
    $resultado = mysqli_query($conexao, $sql);
    
    echo "<table>";
    echo "<tr><td>Livros do acervo da biblioteca:</td></tr>";
    while($livro = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>$livro[titulo]</td>";
        echo "<td>$livro[autor]</td>";
        echo "<td>$livro[editora]</td>";
        echo "<td>$livro[edicao]</td>";
        echo "<td>$livro[ano]</td>";
        echo "<td><a href='emprestar_livro.php?id_aluno=$id&id_livro=$livro[id]'>Pegar emprestado</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Fecha a conexão com o banco
    
    mysqli_close($conexao);
    ?>

    <p><a href="listar_alunos.php">Voltar</a></p>
</body>
</html>
