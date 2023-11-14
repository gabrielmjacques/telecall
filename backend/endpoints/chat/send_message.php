<?php
// Rota para enviar mensagem
header('Content-Type: application/json');

include '../../mysql_conn.php';
session_start();

$message = $_POST['message'];
$target_id = intval($_POST['id']);

$stmt_message_insert = $mysqli->prepare("INSERT INTO messages (message, user_id, is_master_msg) VALUES (?, ?, ?)");

$is_master_msg = 0;
if ($_SESSION['is_master']) {
    $is_master_msg = 1;
}

$stmt_message_insert->bind_param('sii', $message, $target_id, $is_master_msg);

$stmt_message_insert->execute();

if ($stmt_message_insert->affected_rows > 0) {
    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false));
}
