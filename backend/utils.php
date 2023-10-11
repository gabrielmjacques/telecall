<?php

function RedirectTo(string $type, string $msg, string $location)
{
    header("Location: $location?msg=$msg&type=$type");
    exit;
}