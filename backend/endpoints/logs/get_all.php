<?php
// Rota para buscar todos os usuários
header('Content-Type: application/json');

include '../../mysql_conn.php';

$order = 'DESC';

if (isset($_GET['order']) && $_GET['order'] == 'ASC') {
    $order = 'ASC';
}

$stmt_select = $mysqli->prepare("
    SELECT l.*, u.fullname
    FROM logs l
    INNER JOIN users u ON l.user_id = u.id
    ORDER BY l.datatime $order
");
$stmt_select->execute();

$result = $stmt_select->get_result();

$logs = array();

while ($row = $result->fetch_assoc()) {
    $logs[] = $row;
}

echo json_encode($logs);
