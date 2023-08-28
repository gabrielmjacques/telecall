<?php

include_once('mysql_conn.php');

echo 'processando login...';
$msg = '';

$login = $_POST['login'];
$password = $_POST['password'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql_check = "SELECT password FROM users WHERE login = ?";

    $stmt_check = $mysqli->prepare($sql_check);
    $stmt_check->bind_param("s", $login);
    $stmt_check->execute();

    $result = $stmt_check->get_result();

    if ($result->num_rows == 1) {
        $hashed_password = $result->fetch_assoc()['password'];

        if (password_verify($password, $hashed_password)) {
            $msg = 'Login efetuado com sucesso!';
            header('Location: ../index.php?msg=' . $msg);

        } else {
            $msg = 'Login ou Senha incorreta!';
            header("Location: ../reglog.php?msg=$msg");
        }

    } else {
        $msg = 'Login ou Senha incorreta!';
        header("Location: ../reglog.php?msg=$msg");
    }
}

$mysqli->close();