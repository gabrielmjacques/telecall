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
        <a href="https://telecall.com" class="logo">
            <img src="assets/logo.png" alt="Logo da Telecall">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
            <ul class="navbar-nav gap-2">
                <li class="nav-item">

                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Internet
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm-end">
                            <li><a class="dropdown-item" href="https://telecall.com/internet-dedicada/">Internet
                                    Dedicada</a></li>
                            <li><a class="dropdown-item" href="https://telecall.com/banda-larga/">Banda Larga</a>
                            </li>
                            <li><a class="dropdown-item" href="https://telecall.com/wi-fi-e-hotspot/">Wi-Fi</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-item">

                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Telefonia
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm-end">
                            <li><a class="dropdown-item" href="https://telecall.com/pabx-ip-virtual/">PABX IP
                                    Virtual</a></li>
                            <li><a class="dropdown-item" href="https://telecall.com/e1-sip-trunk-2/">E1 / SIP
                                    TRUNK</a></li>
                            <li><a class="dropdown-item" href="https://telecall.com/numeros-0800-e-40xx/">Números
                                    0800 e 40XX</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-item">

                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Rede e Infraestrutura
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm-end">
                            <li><a class="dropdown-item" href="https://telecall.com/ponto-a-ponto/">Ponto-a-Ponto</a>
                            </li>
                            <li><a class="dropdown-item" href="https://telecall.com/mpls/">MPLS</a></li>
                            <li><a class="dropdown-item" href="https://telecall.com/fibra-apagada-e-dutos/">Fibra
                                    Apagada e Dutos</a></li>
                            <li><a class="dropdown-item" href="https://telecall.com/co-locations/">Co-locations</a>
                            </li>
                        </ul>
                    </div>

                </li>
                <li class="nav-item">

                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mobilidade
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm-end">
                            <li><a class="dropdown-item" href="https://telecall.com/celular-empresarial/">Celular
                                    Empresarial</a></li>
                            <li><a class="dropdown-item" href="https://telecall.com/mvna-e-2/">MVNA/E</a></li>
                        </ul>
                    </div>

                </li>
                <li class="nav-item">

                    <a href="https://telecall.com/eventos/" class="btn btn-sm btn-secondary" type="button"
                        aria-expanded="false">
                        Evento
                    </a>

                </li>
                <li class="nav-item">

                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Outros Serviços
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm-end">
                            <li><a class="dropdown-item"
                                    href="https://telecall.com/outsourcing-de-hardware/">Outsourcing de Hardware</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php
                if ($user) {
                    echo "<li class='nav-item' id='profile-dropdown'>
                                <div class='dropdown'>
                                    <button class='btn btn-sm btn-secondary dropdown-toggle' type='button' data-bs-toggle='dropdown'
                                        aria-expanded='false'>
                                        <span id='profile-login'>$user[login]</span>
                                    </button>
                                    <ul class='dropdown-menu dropdown-menu-sm-end'>
                                        <li>
                                            <a class='dropdown-item' href='backend/logout.php'>Desconectar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>";
                } else {
                    echo "<li class='nav-item'>
                                    <a href='reglog.php' class='btn btn-sm btn-danger' type='button'
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