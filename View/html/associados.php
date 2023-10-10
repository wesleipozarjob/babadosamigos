<?php 
//Verificando se há sessão ativa. Se não há, ele automaticamente destrói a senha e o email, redirecionando pro login
session_start();
if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['email'])==true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:../html/login.php');
}
$logado = $_SESSION['email'];

include_once('../configuracao/conect.php');
$sql = "SELECT * FROM associados ORDER BY id ASC";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/associado.css">
   
    <title>baba dos amigos</title>
</head>
<body>

<a href="index.php"><img src="../img/seta-esquerda.png" alt="" width="40px"></a>

<!-- Centralize a div com a classe "cabecalho" -->
<div class="cabecalho text-center">
    <img src="../img/logo-baba.png" alt="">
</div>

<table class="table table-dark table-striped-columns">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">associados</th>
        <th scope="col">N°</th>
        <th scope="col">mensalidade</th>
        <th scope="col">qtd</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    while($user_data = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$user_data['id'].'</td>';
        echo "<td>".$user_data['associado']."</td>"; // Substitua 'nome' pelo nome da coluna correta
        echo "<td>".$user_data['numero']."</td>"; // Substitua 'numero' pelo nome da coluna correta
        echo "<td>".$user_data['mensalidade']."</td>"; // Substitua 'mensalidade' pelo nome da coluna correta
        echo "<td>".$user_data['qtd']."</td>"; // Substitua 'quantidade' pelo nome da coluna correta
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<!-- <footer>
<div class="rodape">
<p>
Criado por Weslei Pozar
</p>
</div>
</footer> -->

</body>
</html>
