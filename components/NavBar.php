<?php

$user;
$is_master;

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $is_master = $_SESSION['is_master'];
} else {
    $user = null;
    $is_master = null;
}
?>

<nav class="navbar navbar-expand-lg  navbar-dark p-0">
    <div class="container-fluid p-0">
        <a href="./" class="logo">
            <img src="/telecall/assets/logo.png" alt="Logo da Telecall">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
            <ul class="navbar-nav gap-2">

                <?php
                // Se o usuário estiver logado
                if ($user && !$is_master) {
                    echo "<li class='nav-item' id='profile-dropdown'>
                                <div class='dropdown'>
                                
                                    <button class='btn btn-sm btn-secondary dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                        <span id='profile-login'>$user[login]</span>
                                    </button>
                                    
                                    <ul class='dropdown-menu dropdown-menu-sm-end'>
                                        <li>
                                            <a class='dropdown-item' href='/telecall/'>Início</a>
                                        </li>
                                        <li>
                                            <a class='dropdown-item' href='/telecall/backend/logout.php'>Desconectar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>";

                    // Se o usuário for master
                } else if ($user && $is_master) {
                    echo "<li class='nav-item' id='profile-dropdown'>
                                <div class='dropdown'>
                                
                                    <button class='btn btn-sm btn-secondary dropdown-toggle' type='button' data-bs-toggle='dropdown'
                                        aria-expanded='false'>
                                        <span id='profile-login'>$user[login]</span>
                                    </button>
                                    
                                    <ul class='dropdown-menu dropdown-menu-sm-end'>
                                        <li>
                                            <a class='dropdown-item' href='/telecall/'>Início</a>
                                        </li>
                                        <li>
                                            <a class='dropdown-item' href='/telecall/master/dashboard.php'>Dashboard</a>
                                        </li>
                                        <li>
                                            <a class='dropdown-item' href='/telecall/backend/logout.php'>Desconectar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>";

                    // Se o usuário não estiver logado
                } else {
                    echo "<li class='nav-item'>
                            <a href='/telecall/reglog.php' class='btn btn-sm btn-danger' type='button'
                                aria-expanded='false'>
                                Login / Cadastro
                            </a>
                        </li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>