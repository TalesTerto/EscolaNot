        <?php
            session_start();
            if (!isset($_SESSION['usuario'])) {
                header('location: login.php');
                exit;
            }
        ?>  

</html><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
    </style>
</head>
</body>
<div class="container">

<?php
$usuario = $_SESSION['usuario'];
$perfil = $_SESSION['perfil'];
echo "Usuário identificado: $usuario ($perfil) <a href='logout.php'>Sair</a><p>";

if ($perfil == "Administrador") {
    echo "<a href='biblioteca/lista_livros.php'>Biblioteca</a>";
    echo "<hr>";
    echo "<a href='alunos/listar_alunos.php'>Alunos</a>";
    echo "<hr>";
    echo "<a href='cursos/listar_curso.php'>Cadastro de Cursos</a>";
    echo "<hr>";
    echo "<a href='eventos/inscricao_evento.php'>Eventos</a>";
    echo "<hr>";
}

if ($perfil == "Secretário Escolar") {
    echo "<a href='alunos/listar_alunos.php'>Alunos</a>";
    echo "<hr>";
    echo "<a href='cursos/listar_curso.php'>Cadastro de Cursos</a>";
    echo "<hr>";
}

if ($perfil == "Bibliotecário") {
    echo "<a href='cursos/listar_curso.php'>Cadastro de Livro</a>";
    echo "<hr>";
}
?>
</div>  
</body>
</html>
