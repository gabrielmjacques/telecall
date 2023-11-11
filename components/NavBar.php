<?php
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
$is_logged = isset($_SESSION['is_logged']) ? $_SESSION['is_logged'] : false;
$is_master = isset($_SESSION['is_master']) ? $_SESSION['is_master'] : false;
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

                <li class="nav-item">
                    <a href="/telecall/" class="btn text-light">Ínicio</a>
                </li>

                <!-- Se o usuário estiver logado -->
                <?php if ($is_logged): ?>
                <li class='nav-item' id='profile-dropdown'>
                    <div class='dropdown'>

                        <button class='btn btn-sm btn-secondary dropdown-toggle' type='button' data-bs-toggle='dropdown'
                            aria-expanded='false'>
                            <span id='profile-login'><?php echo $user["login"] ?></span>
                        </button>

                        <ul class='dropdown-menu dropdown-menu-sm-end'>
                            <li>
                                <!-- Se o usuário for master -->
                                <?php if ($is_master): ?>
                                <a class='dropdown-item' href='/telecall/master/dashboard.php'>Painel Master</a>
                                <?php endif;?>


                                <a class='dropdown-item' href='/telecall/backend/logout.php'>Desconectar</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Se o usuário não estiver logado -->
                <?php else: ?>
                <li class='nav-item'>
                    <a href='/telecall/reglog.php' class='btn btn-sm btn-danger' type='button' aria-expanded='false'>
                        Login / Cadastro
                    </a>
                </li>

                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>