<?php
session_start();
include('conexao.php');


if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $texto = $_POST['texto'];

    if ($arquivo['error'])
        die("Falha ao enviar o arquivo");

    $pasta = "arquivos/";
    $nomeArquivo = $arquivo['name'];
    $novoNomeArquivo = uniqid(); //dar um nome aleatorio para o arquivo para não sobrescrever
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

    if ($extensao == "php")
        die("Tipo de arquivo invalido");

    $path = $pasta . $novoNomeArquivo . "." . $extensao;

    $deuCerto = move_uploaded_file($arquivo["tmp_name"], $path);
    if ($deuCerto) {
        $mysqli->query("INSERT INTO arquivos (nome, texto, path) VALUES ('$nomeArquivo', '$texto', '$path')") or die($mysqli->error);
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
    <link rel="icon" href="./logo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Time Line</title>
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/logo.png" width="70%">
                </a>
                <ul class="nav justify-content-center m-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-black" href="#">Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="acervo.php">Acervo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Comunidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Serviços</a>
                    </li>
                </ul>
                <a class="navbar-brand" href="perfil.php?email=<?php echo $_GET['email']; ?>">
                    <img src="./assets/userLogo.png" width="70%">
                </a>
            </div>
        </nav>
    </header>

    <p>Gostaria de criar uma publicação,
        <?php echo $_SESSION['name']; ?>
    </p>


    <form enctype="multipart/form-data" method="POST">
        <p><label for="">Digite o que esta pensando</label><input type="text" name="texto"></p>
        <p><label for="">Selecione o arquivo</label>
            <input name="arquivo" type="file">
        </p>
        <button name="upload" type="submit">Enviar arquivo</button>
    </form>

    <a class="btn btn-dark" href="painel.php?email=<?php echo $_GET['email']; ?>">
        timeLine
    </a>
    <a class="btn btn-dark" href="logout.php">Sair</a>





</body>

</html>