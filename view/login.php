<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>

<body>
    <form method="POST" action="../controller/autenticar.php">
        <label>Usuario: </label>
        <input require type="text" name="nome"><br>
        <label>Senha: </label>
        <input require type="password" name="senha"><br>
        <button>Entrar</button>
        <a href="cadastro.php">Cadastrar</a>
    </form>
</body>

</html>