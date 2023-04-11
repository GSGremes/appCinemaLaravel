<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <link rel="icon" href="./assets/logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
    <title>Login</title>
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
                    <img src="./assets/logoBlack.png" width="70%">
                </a>
                <form class="row g-2 justify-content-end" method="POST" action="validaLogin.php">
                    <div class="col-auto">
                        <label class="visually">E-mail</label>
                        <input type="email" class="form-control" name="email" autofocus
                            placeholder="user@etec.sp.gov.br" required>
                    </div>
                    <div class="col-auto">
                        <label class="visually">Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="*********">
                        <!-- <a class="text-black" href="#">Esqueceu a senha?</a> -->
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark mt-4">Login</button>
                    </div>
                </form>
            </div>
        </nav>
       
    </header>

    <main>

        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="col-sm">
                    <h1>Bem vindo ao nosso serviço</h1>
                    <p>Junte-se a esse universo mágico da leitura</p>
                </div>
                <div class="col-sm">
                    <img src="./assets/imgLog.png" width="80%">
                </div>
                <div class="col-sm">
                    <h3>Entre em nossa comunidade</h3>
                    <p>Registre-se, seja parte de nossos leitores</p>
                    <div class="col-auto">
                        <a href="cadastro.php"><button type="submit" class="btn btn-dark mt-6">Registrar</button></a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    </main>
    <footer class="gradient">
    </footer>
</body>

</html>