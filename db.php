<?php

# conexão com o banco de dados
$servidor = 'us-cdbr-iron-east-04.cleardb.net';
$usuario = 'b67e91c0dec3ac';
$senha = '2f61ddaa';
$database = 'heroku_73bd3f8c7d8b75c';

$connection = mysqli_connect($servidor, $usuario, $senha, $database);

if(!$conexao){
    echo 'Erro ao conectar com o banco de dados';
}
?>
