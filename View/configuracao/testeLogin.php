<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    // Acesso ao banco de dados
    include_once('conect.php');
    //resgatando valores tanto do clientee quanto do banco de dados
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
   //verificando se os dados são iguais, assim validando a entrada para o index
    $sql = "SELECT * FROM logar WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] =$email;
        $_SESSION['senha'] = $senha;
       header('Location: ../html/index.php');
    }else{
        //se não for igual, destrói as informções e vai para pagina login.php
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../html/login.php');
    }
    
}else{
    header('Location: ../html/login.php');
}
?>
