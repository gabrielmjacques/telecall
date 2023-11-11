<?php
header("Content-type: application/json");
session_start();

$answer = $_POST['2fa_answer'];
$column = $_POST['2fa_column'];

if (strtolower($answer) == strtolower($_SESSION['user'][$column])) {
    $_SESSION['is_logged'] = true;
    $_SESSION['is_master'] = false;

    echo json_encode(array(
        'status' => 'success',
    ));

    die();

} else {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'Resposta incorreta!',
    ));

    die();
}
