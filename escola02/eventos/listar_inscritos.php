<?php
            session_start();
            if (!isset($_SESSION['usuario'])) {
                header('location: login.php');
                exit;
            }
        ?>  
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

    $sql = "SELECT e.titulo AS Evento,p.nome AS Participantes,p.email".
            " FROM participantes p, eventos e, inscricoes i WHERE p.id=i.id_participante AND e.id=i.id_evento;";
    $resultado = mysqli_query($conexao, $sql);
    
    echo "<table>";
    while ($inscricao = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>$inscricao[Evento]</td>";
        echo "<td>$inscricao[Participantes]</td>";
        echo "<td>$inscricao[email]</td>";
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
