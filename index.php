<?php

session_start();

if (isset($_SESSION['logado']) and $_SESSION['logado'] == true)
    header('location: view/relatorio.php');
else
    header('location: controller/sair.php');