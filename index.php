<?php
    include_once './php/session.php';
    include_once './php/userLogin.php';
    include_once './php/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02</title>
        <link rel="stylesheet" href="./src/style.css">
    </head>
    <body>
        <div class="back">
        </div>
        <div class="container">
            <p class="title">LOGIN</p>
            <img class="banner" src="https://png.pngtree.com/thumb_back/fh260/back_our/20190621/ourmid/pngtree-steam-wave-international-film-festival-banner-poster-image_195212.jpg">
            <form class="loginForm" method="POST">
                <label for="email" class="loginLbl">Email</label>
                <input type="text" class="loginInput" name="email">
                <label for="password" class="loginLbl">Senha</label>
                <input type="password" class="loginInput" name="password">
                <input type="submit" name="loginBtn" value="Entrar" class="loginBtn"/>
            </form>
                
            <?php
                if(isset($_POST['loginBtn'])){
                    include_once './php/login.php';
                }                
            ?>
            <p class="registerBtn">Não possui uma conta?<a href="./pages/logUp.php" class="redirect"> Clique aqui!</a></p>
        </div>
    </body>
    </html>