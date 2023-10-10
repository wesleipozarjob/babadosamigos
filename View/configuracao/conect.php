<!-- Conexão com PHP e Mysql -->
<?php 
//adicionando os dados do banco de dados
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'babadosamigos';
    //orientado a objeto para conexão do banco de dados
    $conexao = new mysqli($dbHost,$dbUsername, $dbPassword,  $dbName);

?>