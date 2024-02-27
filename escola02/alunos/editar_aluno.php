<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
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

    $sql = "SELECT id,nome,email,telefone,responsavel FROM alunos WHERE id=$id";
    
    // Editar formulário

    $resultado = mysqli_query($conexao, $sql);
    $aluno = mysqli_fetch_array($resultado);
    $id =       $aluno['id'];
    $nome =     $aluno['nome'];
    $email =    $aluno['email'];
    $telefone = $aluno['telefone'];
    $responsavel = $aluno['responsavel'];

    //echo "Nome: $nome<br>e-mail: $email<br>Telefone: $telefone";

    //Query SQL para atualizar o registro
    

    // Fecha a conexão com o banco de dados

    mysqli_close($conexao);
?>

<form method="post" action="incluir_aluno.php">
        <input type="hidden" name="id" value=<?php echo $id; ?>><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>"><br>
        <label for="email">e-mail:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>
        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" value="<?php echo $telefone; ?>"><br>
        <label for="responsavel">responsavel:</label><br>
        <input type="text" id="responsavel" name="responsavel" value="<?php echo $responsavel; ?>"><br>
        <input type="submit" value="Alterar"></p>
    </form>

</body>
</html>