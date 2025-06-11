<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include_once '../php/session.php';
        include_once '../php/userLogin.php';
        include_once '../php/conexao.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/logUp.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="back">
    </div>
    <div class="container">
            <p class="title">CADASTRO</p>
            <img class="banner" src="https://png.pngtree.com/thumb_back/fh260/back_our/20190621/ourmid/pngtree-steam-wave-international-film-festival-banner-poster-image_195212.jpg">
            <form class="logupForm" method="POST">
                <div class="userInfo">
                    <div class="leftInfo">
                        <label for="email" class="logupLbl">Email</label>
                        <input type="email" class="logupInput" name="email">
                        <label for="userName" class="logupLbl">Nome de usuário</label>
                        <input type="text" class="logupInput" name="userName">
                        <label for="password" class="logupLbl">Senha</label>
                        <input type="password" class="logupInput" name="password">
                        <label for="passwordConfirmation" class="logupLbl">Confirmar senha</label>
                        <input type="password" class="logupInput" name="passwordConfirmation">
                    </div>
    
                    <div class="rightInfo">
                        <label for="cpf" class="logupLbl">CPF</label>
                        <input type="text" class="logupInput" name="cpf">
                        <label for="cellphone" class="logupLbl">Número de Telefone</label>
                        <input type="text" class="logupInput" name="cellphone">
                        <label for="birthdate" class="logupLbl">Data de Nascimento</label>
                        <input type="text" class="logupInput" name="birthdate">
                        <p class="blankSpace"></p>
                        <input type="submit" name="logupBtn" value="Cadastrar" class="logupBtn"/>
                    </div>
                </div>
            </form>

            <?php
                if(isset($_POST['logupBtn'])){
                    include_once '../php/register.php';
                }
            ?>

            <p class="registerBtn">Já possui uma conta? <a href="../index.php" class="redirect">Clique aqui!</a></p>
        </div>
</body>
</html>