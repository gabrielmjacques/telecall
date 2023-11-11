<?php

include('mysql_conn.php');
include_once('utilitaries.php');

// Variaveis do formulario
$fullname = $_POST['fullname'];
$birth_date = $_POST['birth_date'];
$mother = $_POST['mother'];
$cpf = $_POST['cpf'];
$gender = $_POST['gender'];
$cel = $_POST['cel'];
$tel_fixo = $_POST['tel_fixo'];
$cep = $_POST['cep'];
$state = $_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];
$number = $_POST['number'];
$complement = $_POST['complement'];
$login = $_POST['new_login'];
$password = $_POST['new_password'];

// Tratamento de dados
$fullname = Captalize($fullname);
$mother = Captalize($mother);
$address = Captalize($address);
$complement = Captalize($complement);
$password = password_hash($password, PASSWORD_DEFAULT);

// Verifica se o usuario ja existe
$stmt_check = $mysqli->prepare("SELECT * FROM users WHERE login = ?");
$stmt_check->bind_param("s", $login);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows() == 1) {
    RedirectTo('danger', 'Usuário já cadastrado. Faça login!', '../reglog.php');

} else {
    // Insere o usuario no banco de dados
    $sql_query = "INSERT INTO users (fullname, birth_date, mother, cpf, gender, cel, tel_fixo, cep, login, password, uf, city, address, house_number, complement, type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";

    $stmt_insert = $mysqli->prepare($sql_query);
    $stmt_insert->bind_param("sssssssssssssis", $fullname, $birth_date, $mother, $cpf, $gender, $cel, $tel_fixo, $cep, $login, $password, $state, $city, $address, $number, $complement);
    
    $stmt_insert->execute();

    $stmt_insert->close();
    $stmt_check->close();

    RedirectTo('success', 'Usuário cadastrado com sucesso! Faça login', '../reglog.php');
}

$mysqli->close();