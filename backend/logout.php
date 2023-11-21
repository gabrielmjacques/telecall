<?php
include 'utilitaries.php';

session_start();

$fullname = $_SESSION["user"]["fullname"];
CreateLog($_SESSION["user"]["id"], "Saiu do sistema");

session_destroy();

header('Location: ../index.php');
