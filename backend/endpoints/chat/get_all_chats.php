<?php
// Rota para retornar todos os chats
header('Content-Type: application/json');

include '../../mysql_conn.php';

// Query para retornar todos os chats junto com seus respectivos usuários
$stmt_select = $mysqli->prepare("
    SELECT u.id, u.fullname, m.*
    FROM users u
    INNER JOIN messages m ON u.id = m.user_id
    ORDER BY m.id DESC
");

$stmt_select->execute();

$result = $stmt_select->get_result();

$chats = array();

while ($row = $result->fetch_assoc()) {
    $chats[] = $row;
}

echo json_encode($chats);
