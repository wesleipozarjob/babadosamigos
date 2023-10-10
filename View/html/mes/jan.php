<?php 
//Verificando se há sessão ativa. Se não há, ele automaticamente destrói a senha e o email, redirecionando pro login
session_start();
if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['email'])==true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:../../html/login.php');
}
$logado = $_SESSION['email'];

include_once('../../configuracao/conect.php');
$sql = "SELECT * FROM financeiro ORDER BY id ASC";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/painel.css">
   
    <title>baba dos amigos</title>
</head>
<body>

<a href="../index.php"><img src="../../img/seta-esquerda.png" alt="" width="40px"></a>

<!-- Centralize a div com a classe "cabecalho" -->
<div class="cabecalho text-center">
    <img src="../../img/logo-baba.png" alt="">
</div>
<h1>janeiro</h1>
<table class="table table-dark table-striped-columns">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">item</th>
        <th scope="col">qtd</th>
        <th scope="col">valor</th>
        <th scope="col">total</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    while($user_data = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$user_data['id'].'</td>';
        echo "<td>".$user_data['item']."</td>"; // Substitua 'nome' pelo nome da coluna correta
        echo "<td>".$user_data['qtd']."</td>"; // Substitua 'numero' pelo nome da coluna correta
        echo "<td>".$user_data['valor']."</td>"; // Substitua 'mensalidade' pelo nome da coluna correta
        echo "<td>".$user_data['total']."</td>"; // Substitua 'quantidade' pelo nome da coluna correta
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
<h3 class="text-center small">*atualizado em **</h3>
<div class="mes text-center">
<ul class="botoes list-inline justify-content-end">
    <li class="list-inline-item"><a href="nov.php"><button class="btn btn-success">nov/23</button></a></li>
    <li class="list-inline-item"><a href="dez.php"><button class="btn btn-success">dez/23</button></a></li>
    <li class="list-inline-item"><a href="jan.php"><button class="btn btn-success">jan/24</button></a></li>
    <li class="list-inline-item"><a href="fev.php"><button class="btn btn-success">fev/24</button></a></li>
    <li class="list-inline-item"><a href="mar.php"><button class="btn btn-success">mar/24</button></a></li>
    <!-- <li class="list-inline-item"><button class="btn btn-success">junho/24</button></li>
    <li class="list-inline-item"><button class="btn btn-success">julho/24</button></li>
    <li class="list-inline-item"><button class="btn btn-success">agosto/24</button></li>
    <li class="list-inline-item"><button class="btn btn-success">set/24</button></li>
    <li class="list-inline-item"><button class="btn btn-success">out/24</button></li> -->
    <!-- <li class="list-inline-item"><button class="btn btn-success">nov/23</button></li>
    <li class="list-inline-item"><button class="btn btn-success">dez/23</button></li> -->
    </ul>
</div>

 
</div>
</body>
</html>
