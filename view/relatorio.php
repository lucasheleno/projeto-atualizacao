<?php
session_start();

if (!isset($_SESSION['logado']) and !$_SESSION['logado'] == true or $_SESSION['tempo'] < time())
    header('location: ../controller/sair.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELATORIO</title>
</head>

<body>
    <label>olá <?php echo $_SESSION['nome'] ?> você está logado</label>
    <a href="../controller/sair.php">Sair</a>

    <form>
        <button>Teste</button>
    </form>
</body>

</html>