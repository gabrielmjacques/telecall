<?php

include_once('mysql_conn.php');

function ConvertToHTML($allUsers)
{
    foreach ($allUsers as $user) {
        $id = $user['id'];
        $fullname = $user['fullname'];
        $birth_date = $user['birth_date'];
        $cpf = $user['cpf'];
        $gender = $user['gender'];
        $cel = $user['cel'];
        $tel_fixo = $user['tel_fixo'];
        $cep = $user['cep'];
        $login = $user['login'];
        $mother = $user['mother'];

        $birth_date = date('d/m/Y', strtotime($birth_date));

        if ($gender == 'mas') {
            $gender = 'Masculino';

        } else if ($gender == 'fem') {
            $gender = 'Feminino';

        } else {
            $gender = 'Outro';
        }

        echo '<tr>';
        echo "<th scope='row'>$id</th>";
        echo "<td>$fullname</td>";
        echo "<td>$birth_date</td>";
        echo "<td>$cpf</td>";
        echo "<td>$gender</td>";
        echo "<td>$cep</td>";
        echo "<td>$cel</td>";
        echo "<td>$tel_fixo</td>";
        echo "<td>$login</td>";
        echo "<td>$mother</td>";
        echo "<td class='d-flex justify-content-center'><button class='btn btn-outline-danger'>X</button></td>";

        echo '</tr>';
    }
}

function getAllUsers()
{
    global $mysqli;

    $allUsers = array();

    $result = $mysqli->query("SELECT * FROM users");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($allUsers, $row);
        }

    } else {
        $allUsers = null;
    }

    return ConvertToHTML($allUsers);
}