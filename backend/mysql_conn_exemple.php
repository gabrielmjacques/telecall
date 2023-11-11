<?php

# Altere o nome do arquivo para mysql_conn.php

# Mude os valores com base no seu banco de dados
$servername = 'HOST';
$username = 'USER';
$password = 'PASSWORD';
$dbname = 'DATABASE';

$mysqli = new mysqli($servername, $username, $password, $dbname);