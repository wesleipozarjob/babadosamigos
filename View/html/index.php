<?php 
// startando a sessão
session_start();
//Verificando se há sessão ativa. Se não há, ele automaticamente destrói a senha e o email, redirecionando pro login
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
    <link rel="stylesheet" href="../css/estilo.css">
    <title>baba dos amigos</title>
</head>
<body>
    
       <section>
        <div id="titulo">
            <img src="../img/logo-baba.png" alt="">
        </div>
   
 
        <div class="botoes">
            <a href="../html/associados.php"><button class="botao1">associados</button></a><br><br>
            <a href="../html/financeiro.php"><button class="botao2">financeiro</button></a>
            <a href="../configuracao/sair.php"><h2>sair</h2></a>
        </div>
    </section>
    <footer>
        <div class="rodape">
        <p>
            Criado por Weslei Pozar
        </p><br>
        <ul class="rede-social">
            <li><a href="linkedin.com/in/weslei-pozar"><img src="../img/linkedin.png" alt=""></a></li>
            <li><a href="github.com/wesleipozarjob"><img src="../img/github.png" alt=""></a></li>
        </ul>
        
    </div>
    </footer>

</body>
</html>