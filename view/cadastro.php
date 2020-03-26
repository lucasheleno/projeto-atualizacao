<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <form method="POST" action="../controller/cadastrar.php">
        <label>Usuario: </label><input require type="text" name="nome"><br>
        <label>Senha: </label><input require type="password" name="senha"><br>
        <button>Cadastrar</button>
    </form>
</body>

</html>