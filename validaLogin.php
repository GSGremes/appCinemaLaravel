<?php

include('conexao.php');

        $sql_code = sprintf('select * from usuario where email="%s" AND senha="%s"', $_POST['email'], $_POST['senha']);
        $sql_query = $mysqli->query($sql_code);

        $usuario = $sql_query->fetch_assoc(); //pegar os dados do BD e jogar dentro da variavel usuario
        $mensagem = "Email ou senha incorretos";
                if(is_null($usuario)){
                    header(sprintf('location: loginUser.php?mensagem=%s', $mensagem ));
                    return;
                }


            $_SESSION['id'] = $usuario['idUser'];
            $_SESSION['name'] = $usuario['nome'];

            header(sprintf('location: painel.php?email=%s', $_POST['email']));