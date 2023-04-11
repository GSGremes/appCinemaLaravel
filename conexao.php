<?php
$usuario = 'root';
$senha = 'root';
$database = 'sistemaLogin';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

$conexao = mysqli_connect($host, $usuario, $senha, $database) or die ('Não foi possível conectar');

if($mysqli->error){
    die("Falha ao conectar ao banco de dados " . $mysqli->error);
}

?>