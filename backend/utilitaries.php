<?php

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
        if(strlen($word) > 2)
            $newtext .= ucfirst($word) . ' ';
        else
            $newtext .= $word . ' ';
    }
    return trim($newtext);
}