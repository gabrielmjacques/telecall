<?php
// Rota para deletar um usuário pelo id
header('Content-Type: application/json');

include '../../mysql_conn.php';

$id = $_GET['id'];

if (isset($id) && $id != '') {
    // Deletar usuário
    $stmt_delete = $mysqli->prepare("DELETE FROM users WHERE id = ?");
    $stmt_delete->bind_param("i", $id);
    $stmt_delete->execute();

    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false));
}