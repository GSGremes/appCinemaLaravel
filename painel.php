<?php

$host = "localhost:3306";
$user = "root";
$pass = "root";
$base = "sistemalogin";
$con = mysqli_connect($host, $user, $pass, $base);
$res = mysqli_query($con, "select * from arquivos"); //consulta BD

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/logo.png" type="image/png">
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

    <div class="row-nav">
        <div class="col-2">
            <div class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-profile" role="tab"
                    aria-controls="list-profile">Pagina Inicial</a>
                <a class="list-group-item list-group-item-action" href="acervo.php" role="tab"
                    aria-controls="list-profile">Acervo</a>
                <a class="list-group-item list-group-item-action" href="#list-messages" role="tab"
                    aria-controls="list-messages">Comunidade</a>
                <a class="list-group-item list-group-item-action" href="#list-settings" role="tab"
                    aria-controls="list-settings">Resenhas</a>
                <a class="list-group-item list-group-item-action" href="#list-settings" role="tab"
                    aria-controls="list-settings">Notificações</a>
                <a class="list-group-item list-group-item-action" href="#list-settings" role="tab"
                    aria-controls="list-settings">Configurações</a>
                <a class="list-group-item list-group-item-action" href="#list-settings" role="tab"
                    aria-controls="list-settings">Privacidade</a>
                <a class="list-group-item list-group-item-action" href="#list-settings" role="tab"
                    aria-controls="list-settings">Perfil</a>
                <a class="btn btn-dark" href="criarPubli.php?email=<?php echo $_GET['email']; ?>">
                    Resenhar
                </a>
            </div>
        </div>
    </div>

    <div class="containerFeed">
        <?php
        while ($arquivo = mysqli_fetch_assoc($res)){

        ?>
        <p><?php echo $arquivo['texto'];?></p>
        <img src=" <?php echo $arquivo['path'];?>" width="10%" />
        <?php
        };
            mysqli_close($con);
        ?>
    </div>

</body>

</html>


</html>