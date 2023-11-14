<?php
// Rota para buscar usuários com o nome parecido com o que foi digitado
header('Content-Type: application/json');

include '../../mysql_conn.php';

if (isset($_GET['search']) && $_GET['search'] != '') {
    $search = '%' . $_GET['search'] . '%';

    // Buscar usuarios com o nome parecido com o que foi digitado
    $stmt_select = $mysqli->prepare("SELECT * FROM users WHERE fullname LIKE ? AND type != 1");
    $stmt_select->bind_param("s", $search);
    $stmt_select->execute();

    $result = $stmt_select->get_result();

    $users = array();

    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    echo json_encode($users);

} else {
    include 'get_all.php';
}
