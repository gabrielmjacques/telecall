<?php
include 'mysql_conn.php';

function RedirectTo(string $type, string $msg, string $location)
{
    header("Location: $location?msg=$msg&type=$type");
    exit;
}

/**
 *  Função para captalizar um texto
 *
 * @param string $text Frase a ser captalizada
 */
function Captalize(string $text)
{
    $words = explode(' ', $text);
    $newtext = '';
    foreach ($words as $word) {
        if (strlen($word) > 2) {
            $newtext .= ucfirst($word) . ' ';
        } else {
            $newtext .= $word . ' ';
        }

    }
    return trim($newtext);
}

function GetUserById(int $id)
{
    global $mysqli;

    $stmt_select = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
    $stmt_select->bind_param("i", $id);
    $stmt_select->execute();

    $result = $stmt_select->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}
