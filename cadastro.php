<?php
session_start();
?>

<!DOCTYPE html>
<html>

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
    <title>Cadê meu livro?</title>
</head>

<body>

    <header>
    <?php
        if (isset($_GET["mensagem"])) {
            
      
        ?>
        <div class="alert alert-danger" role="alert">
            <h3>
            <?php
                echo $_GET["mensagem"];
            ?>
            </h3>
        </div>
        <?php
        }
        ?>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/logo.png" width="70%">
                </a>
                <ul class="nav justify-content-center m-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-black" href="index.php">Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Acervo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Comunidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Serviços</a>
                    </li>
                </ul>
                <a class="navbar-brand" href="loginUser.php">
                    <img src="./assets/userLogo.png" width="70%">
                </a>
            </div>
        </nav>
    </header>




    <div class="login">
        <div class="boxLogin">
            <img class="logoLogin" src="../assets/logoBlack.png" alt="">
            <form action="cadastrar.php" method="POST" enctype="multpart/form-data">
                <div class="mb-3">
                    <label>Nome</label>
                    <input name="nome" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Sobrenome</label>
                    <input name="sobrenome" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Curso</label>
                    <input name="curso" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Periodo</label>
                    <input name="periodo" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Instituição</label>
                    <input name="instituicao" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input name="email" type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input name="senha" type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Rg ou Rm</label>
                    <input name="rgrm" type="text" class="form-control">
                    </br>
                    <button class="btn btn-dark" type="submit">Cadastrar</button>
                </div>
        </div>
        </form>
    </div>
    </div>


</body>

</html>