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

<body>
    <?php
    if (isset($_GET['msg'])) {
        echo "<div class='alert alert-dark warning' role='alert'>
                $_GET[msg]
            </div>";
    }

    include_once('components/NavBar.php');

    ?>



    <main class="container-fluid">

        <?php include_once('components/accessibilityMenu.php'); ?>

        <!-- Seção de apresentação -->
        <section class="row apr-container">

            <div
                class="col-md-7 col-sm-10 mx-auto d-flex flex-column justify-content-center text-center p-5 apr-content">
                <div class="row mb-5">
                    <h2 class="mb-4">
                        <strong>Resolva a complexidade de telecomunicação</strong> da sua empresa com nossa plataforma
                        de comunicação corporativa
                    </h2>

                    <div class="col-md-8 mx-auto" style="font-family: Arial, Helvetica, sans-serif;">
                        <h5>
                            Com a Telecall, a comunicação não tem fronteiras. Conecte-se a qualquer momento, de qualquer
                            lugar, com total segurança e confiabilidade.
                        </h5>
                    </div>
                </div>

                <div class="row d-flex gap-2">
                    <div>
                        <button type="button" class="btn btn-danger mx-auto" data-bs-toggle="modal"
                            data-bs-target="#contactModal">
                            Fale com nossos especialistas
                        </button>
                    </div>

                    <a href="https://telecall.com/faq/"><button class="btn btn-danger">FAQ</button></a>
                </div>
            </div>

            <img class="apr-wave" src="assets/main_page/apr_wave.svg" alt="">

            <!-- Modal para Contato -->
            <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Fale Conosco</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="modal-body d-flex flex-column gap-4">
                                <!-- Nome Completo -->
                                <div class="form-group">
                                    <label for="modal-username">Nome Completo</label>
                                    <input type="text" class="form-control" id="modal-username" name="modal-username"
                                        placeholder="Digite seu nome completo" required>
                                </div>
                                <!-- Campo Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Digite seu email" required>
                                </div>
                                <!-- Campo Assunto -->
                                <div class="form-group">
                                    <label for="subject">Assunto</label>
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Digite o assunto" required>
                                </div>
                                <!-- Campo Mensagem -->
                                <div class="form-group">
                                    <label for="message">Mensagem</label>
                                    <textarea class="form-control" id="message" name="message"
                                        placeholder="Digite sua mensagem" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-danger">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>

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

    <!-- Validação do Bootstrap -->
    <script defer>
        ( () => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll( '.needs-validation' )

            // Loop over them and prevent submission
            Array.from( forms ).forEach( form => {
                form.addEventListener( 'submit', event => {
                    if ( !form.checkValidity() ) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add( 'was-validated' )
                }, false )
            } )
        } )()
    </script>

</body>

</html>