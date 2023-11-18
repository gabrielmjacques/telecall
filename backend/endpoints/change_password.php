<?php
// Rota para troca de senha
header('Content-Type: application/json');

include '../mysql_conn.php';

$cpf = $_POST['cpf'];
$login = $_POST['login'];
$fullname = $_POST['fullname'];
$new_password = $_POST['new_password'];

$stmt_check = $mysqli->prepare("SELECT * FROM users WHERE login = ?");
$stmt_check->bind_param("s", $login);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows != 0) {
    $row = $result->fetch_assoc();

    if ($row['cpf'] == $cpf && strtolower($row['fullname']) == strtolower($fullname)) {

        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

        $stmt = $mysqli->prepare("UPDATE users SET password = ? WHERE login = ?");
        $stmt->bind_param("ss", $new_password_hash, $login);
        $stmt->execute();

        if ($stmt->affected_rows == 1) {
            echo json_encode(array("success" => true));

        } else {
            echo json_encode(array("success" => false));
        }

    } else {
        echo json_encode(array("success" => false));
    }
}
