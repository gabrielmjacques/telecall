<?php
// Rota para retornar todas as mensagens
header('Content-Type: application/json');

include '../../mysql_conn.php';
session_start();

$stmt_message_select = $mysqli->prepare("
    SELECT * from messages
    WHERE user_id = ?
    ");

$stmt_message_select->bind_param('i', $_GET['id']);
$stmt_message_select->execute();

if ($stmt_message_select->error) {
    echo json_encode(array(
        'success' => false,
        'error' => $stmt_message_select->error,
    ));
    return;
}

$result = $stmt_message_select->get_result();

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode(array(
    'success' => true,
    'messages' => $data,
));
