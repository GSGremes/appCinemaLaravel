<?php
session_start();
include('conexao.php');

$host = "localhost:3306";
$user = "root";
$pass = "root";
$base = "sistemaLogin";
$con = mysqli_connect($host, $user, $pass, $base);

$sql = sprintf('select * from usuario where email="%s"', $_GET['email']);
$res = mysqli_query($con, $sql); //consulta BD



//  executa o comando sql, no caso para pegar todos os usuários do sistema e retorna o valor da consulta em uma variável ($res)



// enquanto houver dados na tabela 
while ($escrever = mysqli_fetch_array($res)) {
    echo "<ul>
        <li>" . $escrever['id'] . "</li> 
        <li>" . $escrever['nome'] . "</li>
        <li>" . $escrever['sobrenome'] . "</li>
        <li>" . $escrever['curso'] . "</li>
        <li>" . $escrever['periodo'] . "</li> 
        <li>" . $escrever['instituicao'] . "</li>
        <li>" . $escrever['email'] . "</li>
        <li>" . $escrever['rgrm'] . "</li>
        </ul>";
}

mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>

    <!-- <form enctype="multipart/form-data" method="POST">
        <p><label for="">Foto de Perfil</label>
            <input name="arquivo" type="file">
        </p>
        <button name="upload" type="submit">Enviar arquivo</button>
    </form> -->

    <p>Bem vindo ao seu perfil,
        <?php echo $_SESSION['name']; ?>
    </p>

    <a href="painel.php?email=<?php echo $_GET['email']; ?>">Voltar a Time Line</a>
    <a href="Editperfil.php">editar Perfil</a>



</body>

</html>