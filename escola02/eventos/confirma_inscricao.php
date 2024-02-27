<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livro</title>
</head>
<body>
    Confirma inscrição</p>

    <?php 
    
    // Recebe os dados do formulário 
    $id_evento = $_POST["id_evento"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    // Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Inclui na tabela 'participantes'

    $sql = "INSERT INTO participantes (nome,telefone,email) VALUES ('$nome','$telefone','$email')";
    // echo $sql;

    if(mysqli_query($conexao, $sql)){
        echo "<p>Dados participante inseridos com sucesso";
        $sql = "SELECT id FROM participantes WHERE email='$email'";
        $resultado = mysqli_query($conexao, $sql);
        $participante = mysqli_fetch_array($resultado);
        $id_participante = $participante['id'];

        $sql = "INSERT INTO inscricoes (id_evento,id_participante) VALUES ('$id_evento','$id_participante')";
        if(mysqli_query($conexao, $sql)){
            echo "<p>Dados da inscriçaõ inseridos com sucesso";
        } else {
            echo "<p>Erro ao inserir dados da inscrição";
        }
    } else {
        echo "<p>Erro ao inserir dados do participante";
    }

    // Fecha a conexão com o banco
    mysqli_close($conexao);
    ?>
    <p><a href="../index.php">Volta para a página principal</a>
</body>
</html>