<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$arquivo = "../data/banco_dados.json";
$conteudoArquivo = file_get_contents($arquivo);
$banco_dados = json_decode($conteudoArquivo);

$usuario = new stdClass();

$usuario->nome = $nome;
$usuario->senha = $senha;

array_push($banco_dados->usuarios,$usuario);

$json = json_encode($banco_dados);
$file = fopen($arquivo,"w");
fwrite($file, $json);

header('location: ../index.php');