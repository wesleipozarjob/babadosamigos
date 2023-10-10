<?php
//após pressionar "sair", os dados são destruidos e o site o redireciona para o index.php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: ../../index.php");
?>