<?php

include_once('mysql_conn.php');

$msg = '';

$login = $_POST['login'];
$password = $_POST['password'];
$is_master = false;
$table = 'users';

if (isset($_POST['is_master'])) {
    $is_master = true;
    $table = 'master_users';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql_check = "SELECT * FROM $table WHERE login = ?";

    $stmt_check = $mysqli->prepare($sql_check);
    $stmt_check->bind_param("s", $login);
    $stmt_check->execute();

    $result = $stmt_check->get_result();

    // Verifica se o usuário existe
    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        // Verifica a senha do usuário master
        if ($is_master) {
            echo 'É master';

            if ($user['password'] == $password) {
                $msg = 'Login efetuado com sucesso!';

                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['is_master'] = true;

                header('Location: ../index.php?msg=' . $msg);
                return;
            }

            // Verifica a senha do usuário comum
        } else {
            if (password_verify($password, $user['password'])) {
                $msg = 'Login efetuado com sucesso!';

                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['is_master'] = false;

                header('Location: ../index.php?msg=' . $msg);
                return;
            }
        }
    }

    $msg = 'Login ou Senha incorreta!';
    header("Location: ../reglog.php?msg=$msg");
}

$mysqli->close();