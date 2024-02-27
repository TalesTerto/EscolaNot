<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento - Inscrição</title>
</head>
<body>
    Evento - Inscrição</p>
    <?php 
    
    // Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Consultar dados na tabela 'eventos'
    
    $sql = "SELECT id,titulo FROM eventos WHERE situacao='A'";
    // echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    $evento = mysqli_fetch_array($resultado);
    echo "<p>Evento: $evento[titulo] <a href='listar_inscritos.php'><br>Inscritos</a></p>";
    $id_evento = $evento['id'];
    // echo " - id=$id_evento<p>";
    ?>

    <form method="post" action="confirma_inscricao.php">
        <input type="hidden" id="id_evento" name="id_evento" value=<?php echo $id_evento; ?>>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br>
        <label for="email">e-mail:</label><br>
        <input type="text" id="email " name="email"><br>
        <input type="submit" value="Inscrever"></p>
    </form>

</body>
</html>