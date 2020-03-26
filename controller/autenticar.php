<?php
session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$conteudoArquivo = file_get_contents("../data/banco_dados.json");
$dados = json_decode($conteudoArquivo);

foreach ($dados->usuarios as $usuario) {

    if ($nome === $usuario->nome and $senha === $usuario->senha) {

        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        $_SESSION['tempo'] = time()+5;
    }
}

header('location: ../index.php');