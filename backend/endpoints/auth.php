<?php
include '../utilitaries.php';

header("Content-type: application/json");
session_start();

$answer = $_POST['2fa_answer'];
$column = $_POST['2fa_column'];

if (strtolower($answer) == strtolower($_SESSION['user'][$column])) {
    $_SESSION['is_logged'] = true;
    $_SESSION['is_master'] = false;

    CreateLog($_SESSION['user']['id'], "Autenticou no sistema");

    echo json_encode(array(
        'status' => 'success',
    ));

    die();

} else {
    CreateLog($_SESSION['user']['id'], "Tentou acessar o sistema | 2FA incorreto");

    echo json_encode(array(
        'status' => 'error',
        'message' => 'Resposta incorreta!',
    ));

    die();
}
