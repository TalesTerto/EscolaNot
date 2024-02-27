<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Livros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cadastro Livros</h1>

    <form method="post" action="incluir_livros.php">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor">

        <label for="edicao">Edição:</label>
        <input type="text" id="edicao" name="edicao">

        <label for="ano">Ano:</label>
        <input type="text" id="ano" name="ano">

        <label for="editora">Editora:</label>
        <input type="text" id="editora" name="editora">

        <label for="situacao">Situação:</label>
        <input type="text" id="situacao" name="situacao">

        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>
