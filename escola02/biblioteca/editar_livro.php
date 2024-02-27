<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livros</title>
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

    $sql = "SELECT id,titulo,autor,editora,edicao,ano,situacao FROM livros WHERE id=$id";
    
    // Editar formulário

    $resultado = mysqli_query($conexao, $sql);
    $livros = mysqli_fetch_array($resultado);
    $id =         $livros['id'];
    $autor =      $livros['autor'];
    $titulo =     $livros['titulo'];
    $editora =    $livros['editora'];
    $edicao =     $livros['edicao'];
    $ano =        $livros['ano'];
    $situacao =   $livros['situacao'];

    //echo "Nome: $nome<br>e-mail: $email<br>Telefone: $telefone";

    //Query SQL para atualizar o registro
    

    // Fecha a conexão com o banco de dados

    mysqli_close($conexao);
?>

<form method="post" action="livros.php">
        <input type="hidden" name="id" value=<?php echo $id; ?>><br>
        <label for="titulo">titulo:</label><br>
        <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>"><br>
        <label for="autor">autor:</label><br>
        <input type="text" id="autor" name="autor" value="<?php echo $autor; ?>"><br>
        <label for="editora">editora:</label><br>
        <input type="text" id="editora" name="editora" value="<?php echo $editora; ?>"><br>
        <label for="edicao">edicao:</label><br>
        <input type="text" id="edicao" name="edicao" value="<?php echo $edicao; ?>"><br>
        <label for="ano">ano:</label><br>
        <input type="text" id="ano" name="ano" value="<?php echo $ano; ?>"><br>
        <label for="situacao">situacao:</label><br>
        <input type="text" id="situacao" name="situacao" value="<?php echo $situacao; ?>"><br>
        <input type="submit" value="Alterar"></p>
    </form>

</body>
</html>