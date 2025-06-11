<?php
    $userEmail = $_POST['email'];
    $userName = $_POST['userName'];
    $userPassword = $_POST['password'];
    $confirmPassword = $_POST['passwordConfirmation'];
    $userCpf = $_POST['cpf'];
    $userCell = $_POST['cellphone'];
    $userBirth = $_POST['birthdate'];

    $sql = "SELECT email_user FROM usuario WHERE email_user = '$userEmail';";
    $emailConfirm = $conexao -> query($sql);

     

    if($userEmail === "" || $userName === ""|| $userPassword === "" || $userCpf ==="" || $userCell === "" || $userBirth === ""){
         echo "Algum campo está vazio, por favor, tente novamente";
    } elseif ($userPassword != $confirmPassword) {
        echo "As senhas não conferem. Por favor, tente novamente.";
    } elseif ($emailConfirm !== '') {
        echo "Já existe um usuário com esse email, por favor tente novamente.";
    } elseif ($userPassword.strlen() > 6){
        echo 'Sua senha deve ter ao menos 6 digitos.';
    } else {
        $sql = "INSERT INTO usuario(email_user, name_user, passwd_user, phone_user, cpf_user, birth_user) VALUES ('$userEmail', '$userName', '$userPassword', '$userCell', '$userCpf', '$userBirth');";
        $consulta = $conexao -> query($sql);
        }
?>