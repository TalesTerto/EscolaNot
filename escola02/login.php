<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    Usuario não registrado. Acesso negado <p>

    <form method="post" action="autenticar.php">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">

        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha">

        <input type="submit" value="Enviar">
    </form>

    <a href="index.php">Vai para a pagina principal</a>

</body>
</html>