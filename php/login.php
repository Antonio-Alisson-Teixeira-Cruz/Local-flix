<?php
    $userEmail = $_POST['email'];
    $userPaswd = $_POST['password'];

    if($userEmail == "" || $userPaswd == ""){
        echo 'Algum dos campos está vazio, por favor, tente novamente';
    }
     else {
        $sql = "SELECT email_user, passwd_user, name_user FROM usuario WHERE email_user= '$userEmail';";
        $consulta = $conexao -> query($sql);

        if($usuarios = $consulta -> fetch_assoc()){

            if($usuarios['email_user'] === $userEmail && $usuarios['passwd_user'] === $userPaswd){
                $logUser = $usuarios['name_user'];
                echo 'O usuário '.$logUser.' existe e está conectado';
                $_SESSION['user'] = $logUser;
                if(isset($_SESSION["user"])){
                    header("Location: ./pages/home.php");
                }
                
            } else if ($usuarios['email_user'] === $userEmail && $usuarios['passwd_user'] != $userPaswd){
                echo 'Senha incorreta';
            }
        } else {
            echo 'O email informado não está cadastrado';
        }
    }
?>