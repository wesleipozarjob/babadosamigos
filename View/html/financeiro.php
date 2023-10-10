<?php 
//Verificando se há sessão ativa. Se não há, ele automaticamente destrói a senha e o email, redirecionando pro login
session_start();
if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['email'])==true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:../html/login.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/financeiro.css">
    
    <title>financeiro</title>
</head>
<body>
    <header>
        <div class="sair">
        <a href="index.php"><img src="../img/seta-esquerda.png" alt="" width="40px"></a>
       
        </div>
     
        <div class="cabecalho">
        <img src="../img/logo-baba.png" alt="">
        <h1>Valor Atual em Caixa</h1>
    </div>
    </header>
    <section>
        <div class="valor">
            <h2>R$510,00</h2>
        </div>
        <div class="botao">
           <a href="mes/nov.php"> <button>ver detalhes</button></a>
        </div>
    </section>
</body>
</html>