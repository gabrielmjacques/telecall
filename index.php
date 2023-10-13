<?php
session_start();
include_once('components/NavBar.php');

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $is_master = $_SESSION['is_master'];
} else {
    $user = null;
    $is_master = null;
}
?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - CPaaS</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS Padrão -->
    <link rel="stylesheet" href="default.css?v=<?php echo time(); ?>">

    <!-- CSS Main Page -->
    <link rel="stylesheet" href="styles/main_page.css">

</head>

<body class="bg-body-subtle" onload="onBodyLoad()">
    <?php
    include_once('components/warningCard.php');
    include_once('components/NavBar.php');
    include_once('components/accessibilityMenu.php');
    ?>

    <main class="container-fluid p-0">

        <div class="apr-container p-5 w-100">
            <h1 class="apr-container-title"><!-- Titulo adicionado dentro de /js/main_page.js --></h1>
            <h3>Com a Telecall, sua empresa está pronta para um futuro de crescimento e eficiência</h3>
        </div>

        <div class="services pt-5">
            <div class="row text-center text-body-emphasis">
                <h1>Nossos Serviços</h1>
                <h3 class="opacity-75">Que tal conhecer um pouco sobre alguns de nossos serviços?</h3>
            </div>

            <div class="row justify-content-center p-3 mt-5 mb-5 gap-3">

                <!-- 2FA -->
                <div class="card shadow bg-body d-flex flex-column justify-content-between col-lg-4 col-xxl-2 col-sm-12 p-3 rounded-5"
                    style="--bs-bg-opacity: .4;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>2FA</h3>
                        <img src="assets/icons/2fa.svg" width="70px" alt="">
                    </div>

                    <p class="fw-bold opacity-75">
                        Adicione uma camada extra de segurança para seus usuários com a autenticação de dois fatores.
                    </p>
                    <div class="arrow"><img class="icons" src="assets/icons/arrow.svg" alt=""></div>
                </div>

                <!-- Numero Máscara -->
                <div class="card shadow bg-body d-flex flex-column justify-content-between col-lg-4 col-xxl-2 col-sm-12 p-3 rounded-5"
                    style="--bs-bg-opacity: .4;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>Número Máscara</h3>
                        <img src="assets/icons/nummask.svg" width="70px" alt="">
                    </div>

                    <p class="fw-bold opacity-75">Com o número máscara, você pode ter um número de telefone virtual para
                        receber chamadas e SMS.</p>
                    <div class="arrow"><img class="icons" src="assets/icons/arrow.svg" alt=""></div>
                </div>

                <!-- SMS Programado -->
                <div class="card shadow bg-body d-flex flex-column justify-content-between col-lg-4 col-xxl-2 col-sm-12 p-3 rounded-5"
                    style="--bs-bg-opacity: .4;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>SMS Programado</h3>
                        <img src="assets/icons/smsprog.svg" width="70px" alt="">
                    </div>

                    <p class="fw-bold opacity-75">
                        Envie SMS para seus clientes de forma programada, com o conteúdo que você desejar.
                    </p>
                    <div class="arrow"><img class="icons" src="assets/icons/arrow.svg" alt=""></div>
                </div>

                <div class="card shadow bg-body d-flex flex-column justify-content-between col-lg-4 col-xxl-2 col-sm-12 p-3 rounded-5"
                    style="--bs-bg-opacity: .4;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>2FA</h3>
                        <img src="assets/icons/2fa.svg" width="70px" alt="">
                    </div>

                    <p class="fw-bold opacity-75">
                        Adicione uma camada extra de segurança para seus usuários com a autenticação de dois fatores.
                    </p>
                    <div class="arrow"><img class="icons" src="assets/icons/arrow.svg" alt=""></div>
                </div>

            </div>
        </div>

    </main>

    <!-- JavaScript Bootstrap -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script defer src="js/jquery.js"></script>

    <!-- Javascript Padrão -->
    <script defer src="js/default.js"></script>

    <!-- Javascript Externo da Página -->
    <script src="js/main_page.js"></script>
</body>

</html>