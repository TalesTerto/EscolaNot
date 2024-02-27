<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autenticar</title>
</head>
<body>
    <?php 
    
    // Recebe os dados do formulário 

    $form_login = $_POST["login"];
    $form_senha= $_POST["senha"];

    // Conexão com o banco de dados

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    $sql = "SELECT nome,perfil FROM usuario,perfis,vinculo WHERE id_usuario=usuario.id AND id_perfil=perfis.id AND login='$form_login' AND senha='$form_senha'";

    $resultado = mysqli_query($conexao, $sql);
    if ($usuario_autenticado = mysqli_fetch_array($resultado)){
        session_start();
        $_SESSION['usuario']=$usuario_autenticado['nome'];
        $_SESSION['perfil']=$usuario_autenticado['perfil'];
    }   else{
        echo "Usuario não autenticado";
    }
    echo "<p>Usuário"
    ?>
    <p><a href="index.php">Voltar para pagina preincipal</a>
    
</body>
</html>