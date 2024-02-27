<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    Desativando a autenticação do uruário. <p>
    
    <?php
        session_start();
        unset($_SESSION['usuario']);
    ?>

    <a href="index.php">Vai para a pagina principal</a>

</body>
</html>