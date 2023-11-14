<?php
// Rota para buscar todos os usuários
header('Content-Type: application/json');

include '../../mysql_conn.php';

$stmt_select = $mysqli->prepare("SELECT * FROM users WHERE type != 1");
$stmt_select->execute();

$result = $stmt_select->get_result();

$users = array();

while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);
