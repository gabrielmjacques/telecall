<?php

include('mysql_conn.php');

$msg = '';

$fullname = $_POST['fullname'];
$birth_date = $_POST['birth_date'];
$mother = $_POST['mother'];
$cpf = $_POST['cpf'];
$gender = $_POST['gender'];
$cel = $_POST['cel'];
$tel_fixo = $_POST['tel_fixo'];
$cep = $_POST['cep'];
$login = $_POST['new_login'];

$password = $_POST['new_password'];
$password = password_hash($password, PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $stmt_check = $mysqli->prepare("SELECT * FROM users WHERE login = ?");
    $stmt_check->bind_param("s", $login);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows() > 0) {
        $msg = "Login já cadastrado. Tente fazer login!";

        header("location: ../reglog.php?msg=$msg");
    } else {
        $sql_query = "INSERT INTO users (fullname, birth_date, mother, cpf, gender, cel, tel_fixo, cep, login, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt_insert = $mysqli->prepare($sql_query);
        $stmt_insert->bind_param("ssssssssss", $fullname, $birth_date, $mother, $cpf, $gender, $cel, $tel_fixo, $cep, $login, $password);
        $stmt_insert->execute();

        $stmt_insert->close();

        $msg = "Usuário cadastrado com sucesso. Faça login!";
        header("location: ../reglog.php?msg=$msg");
    }
}

$mysqli->close();