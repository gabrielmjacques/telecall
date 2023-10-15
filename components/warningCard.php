<?php
// Pop-up de aviso
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    $type = $_GET['type'];

    echo "
        <div class='alert alert-$type warning' role='alert'>
            $msg
        </div>
    ";
}
