<?php

include_once('mysql_conn.php');
include_once('utils.php');


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

            if ($user['password'] == $password) {
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['is_master'] = true;

                RedirectTo('success', 'Login efetuado com sucesso!', '../index.php');
            }

            // Verifica a senha do usuário comum
        } else {
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['is_master'] = false;

                RedirectTo('success', 'Login efetuado com sucesso!', '../index.php');
            }
        }
    }

    RedirectTo('danger', 'Usuário ou senha incorretos!', '../reglog.php');
}

$mysqli->close();