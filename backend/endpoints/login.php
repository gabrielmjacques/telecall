<?php
// definindo o tipo de conteúdo
header("Content-type: application/json");

include_once '../mysql_conn.php';
include_once '../utilitaries.php';

$login = $_POST['login'];
$password = $_POST['password'];

$is_master = false;

// Realiza a consulta no banco de dados
$stmt_check = $mysqli->prepare('SELECT * FROM users WHERE login = ?');
$stmt_check->bind_param("s", $login);
$stmt_check->execute();

$result = $stmt_check->get_result();

// Verifica se o usuário existe
if ($result->num_rows == 1) {

    $user = $result->fetch_assoc();
    $first_name = explode(' ', $user['fullname'])[0];

    // Verifica o tipo de usuário
    switch ($user['type']) {
        // Master
        case '1':
            if ($user['password'] == $password) {
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['is_logged'] = true;
                $_SESSION['is_master'] = true;

                echo json_encode(array(
                    'status' => 'success',
                    'is_master' => true,
                ));
                die();
            }
            break;

        // Comum
        default:
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;

                // Gerando pergunta aleatória para 2FA
                $possible_columns = array(
                    'cep' => 'Qual o seu CEP?',
                    'mother' => 'Qual o nome da sua mãe?',
                    'birth_date' => 'Qual a sua data de nascimento?',
                );

                $column = array_rand($possible_columns);

                echo json_encode(array(
                    'status' => 'success',
                    'is_master' => false,
                    'question' => $possible_columns[$column],
                    'column' => $column,
                ));
                die();
            }
            break;
    }
}

echo json_encode(array(
    'status' => 'error',
    'is_master' => false,
    'message' => 'Login ou senha incorretos',
));
