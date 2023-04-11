<?php
session_start();
include('conexao.php');

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $nome = $_POST['nome'];

    if ($arquivo['error'])
        die("Falha ao enviar o arquivo");

    $pasta = "arquivoPerfil/";
    $nomeArquivo = $arquivo['name'];
    $novoNomeArquivo = uniqid(); //dar um nome aleatorio para o arquivo para não sobrescrever
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

    if ($extensao == "php")
        die("Tipo de arquivo invalido");

    $path = $pasta . $novoNomeArquivo . "." . $extensao;

    $deuCerto = move_uploaded_file($arquivo["tmp_name"], $path);
    if ($deuCerto) {
        $mysqli->query("INSERT INTO arquivos (nome, path) VALUES ('$nomeArquivo', '$path')") or die($mysqli->error);
        echo "Arquivo enviado com sucesso";
    } else
        echo "Falha ao enviar arquivo";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <title>editar perfil</title>
</head>
<body>
    
</body>
</html>