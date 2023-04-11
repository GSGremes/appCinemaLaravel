<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <title>upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multpart/form-data">
        <input type="text" name="nome" placeholder="Nome Completo">
        <input type="file" name="arquivo">
        <input type="submit" name="enviar">
    </form>

    <?php
    
        if(isset($_POST['enviar'])) {
            // print_r($_FILES['arquivo']);
            echo $_FILES['arquivo']['name'];
        }
    ?>

</body>
</html>