<?php
// Incluir arquivo de configuração
require_once "../../../tcc_leoPab/config.php";

// Defina variáveis e inicialize com valores vazios
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validar nome de usuário
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor coloque um nome de usuário.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM users WHERE username = :username";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $param_username = trim($_POST["username"]);

            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Este nome de usuário já está em uso.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            unset($stmt);
        }
    }

    // Validar senha
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor insira uma senha.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validar e confirmar a senha
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }

    // Inserir no banco de dados se tudo estiver correto
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if($stmt->execute()){
                header("location: login.php");
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            unset($stmt);
        }
    }

    unset($pdo);
}
?>