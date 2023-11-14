<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci a Senha - CPaaS</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS Padrão -->
    <link rel="stylesheet" href="default.css?v=<?php echo time(); ?>">

    <!-- CSS Login -->
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <?php
include_once 'components/NavBar.php'; // Inclui a barra de navegação
include_once 'components/accessibilityMenu.php'; // Inclui o menu de acessibilidade
?>

    <main class="container mt-3 mx-auto">

        <div class="row">

            <div class="col-12 p-0 border mt-5 mx-auto position-relative overflow-hidden rounded-5"
                style="max-width: 700px; box-shadow: 0 0 50px #00000049;">

                <!-- Card de troca de senha -->
                <div class="p-5 bg-body rounded-5" id="login_div" style="transition: opacity 1s, scale 1s;">
                    <div class="row mb-3 mt-3">
                        <h3 class="text-center fw-bold">Troque sua Senha</h3>
                        <hr>
                    </div>

                    <form class="needs-validation" novalidate action="" method="post">
                        <!-- Nome Completo -->
                        <div class="col-md-12 form-group mb-3">
                            <label for="fullname_entry">Nome Completo</label>
                            <input class="form-control" type="text" name="fullname" id="fullname_entry" required>
                        </div>

                        <!-- Login -->
                        <div class="col-md-12 form-group mb-3">
                            <label for="login_entry">Login</label>
                            <input class="form-control" type="text" name="login" id="login_entry" required>
                        </div>

                        <!-- Pergunta de segurança -->
                        <div class="col-md-12 form-group mb-3">
                            <label for="question_entry" id="question_label">Pergunta de Segurança: </label>
                            <input class="form-control" type="text" name="question" id="question_entry" required>
                        </div>

                        <!-- Nova Senha -->
                        <div class="form-group mb-5">
                            <label for="new_password_entry">Nova Senha</label>

                            <div class="input-group">
                                <input class="form-control" type="password" name="new_password" id="new_password_entry"
                                    required>

                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="ShowPassword(document.getElementById('new_password_entry'))">
                                    <img class="icons" src="assets/icons/show.png" alt="" width="15px">
                                </button>
                                <div class="invalid-feedback">Preencha os campos</div>
                            </div>

                        </div>

                        <input type="hidden" id="database_question" name="database_question">

                        <!-- Botão Entrar -->
                        <div class="form-group mb-3 d-flex">
                            <a href="reglog.php" class="show_cad_btn btn btn-sm w-100">Voltar</a>

                            <button href="index.html" class="btn w-100 btn-outline-danger">
                                Trocar Senha
                            </button>
                        </div>
                    </form>

                    <!-- Mostrar aba de cadastro -->
                </div>
            </div>
        </div>
    </main>

    <!-- SVG's com formato de onda -->
    <div class="waves">
        <svg id="visual" viewBox="0 0 2000 540" width="2000" height="540" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path class="wave-1"
                d="M0 466L27.8 470.8C55.7 475.7 111.3 485.3 166.8 486.8C222.3 488.3 277.7 481.7 333.2 468.3C388.7 455 444.3 435 500 437.5C555.7 440 611.3 465 666.8 470C722.3 475 777.7 460 833.2 445.5C888.7 431 944.3 417 1000 412C1055.7 407 1111.3 411 1166.8 422.5C1222.3 434 1277.7 453 1333.2 467.3C1388.7 481.7 1444.3 491.3 1500 496.5C1555.7 501.7 1611.3 502.3 1666.8 502.3C1722.3 502.3 1777.7 501.7 1833.2 491.8C1888.7 482 1944.3 463 1972.2 453.5L2000 444L2000 541L1972.2 541C1944.3 541 1888.7 541 1833.2 541C1777.7 541 1722.3 541 1666.8 541C1611.3 541 1555.7 541 1500 541C1444.3 541 1388.7 541 1333.2 541C1277.7 541 1222.3 541 1166.8 541C1111.3 541 1055.7 541 1000 541C944.3 541 888.7 541 833.2 541C777.7 541 722.3 541 666.8 541C611.3 541 555.7 541 500 541C444.3 541 388.7 541 333.2 541C277.7 541 222.3 541 166.8 541C111.3 541 55.7 541 27.8 541L0 541Z"
                fill="#cf2e2e" stroke-linecap="round" stroke-linejoin="miter">
            </path>
            <path class="wave-2"
                d="M0 327L27.8 348.8C55.7 370.7 111.3 414.3 166.8 432.3C222.3 450.3 277.7 442.7 333.2 443.3C388.7 444 444.3 453 500 461C555.7 469 611.3 476 666.8 462.7C722.3 449.3 777.7 415.7 833.2 389.7C888.7 363.7 944.3 345.3 1000 335.8C1055.7 326.3 1111.3 325.7 1166.8 342.7C1222.3 359.7 1277.7 394.3 1333.2 406.5C1388.7 418.7 1444.3 408.3 1500 398C1555.7 387.7 1611.3 377.3 1666.8 368.2C1722.3 359 1777.7 351 1833.2 346.3C1888.7 341.7 1944.3 340.3 1972.2 339.7L2000 339L2000 541L1972.2 541C1944.3 541 1888.7 541 1833.2 541C1777.7 541 1722.3 541 1666.8 541C1611.3 541 1555.7 541 1500 541C1444.3 541 1388.7 541 1333.2 541C1277.7 541 1222.3 541 1166.8 541C1111.3 541 1055.7 541 1000 541C944.3 541 888.7 541 833.2 541C777.7 541 722.3 541 666.8 541C611.3 541 555.7 541 500 541C444.3 541 388.7 541 333.2 541C277.7 541 222.3 541 166.8 541C111.3 541 55.7 541 27.8 541L0 541Z"
                fill="#cf2e2e" stroke-linecap="round" stroke-linejoin="miter">
            </path>
            <path class="wave-3"
                d="M0 440L25.7 437.8C51.3 435.7 102.7 431.3 154 428.7C205.3 426 256.7 425 308 398.2C359.3 371.3 410.7 318.7 461.8 309.7C513 300.7 564 335.3 615.2 362.3C666.3 389.3 717.7 408.7 769 407.5C820.3 406.3 871.7 384.7 923 386.8C974.3 389 1025.7 415 1077 416.7C1128.3 418.3 1179.7 395.7 1231 378C1282.3 360.3 1333.7 347.7 1384.8 354.8C1436 362 1487 389 1538.2 391.5C1589.3 394 1640.7 372 1692 373.8C1743.3 375.7 1794.7 401.3 1846 411.2C1897.3 421 1948.7 415 1974.3 412L2000 409L2000 541L1974.3 541C1948.7 541 1897.3 541 1846 541C1794.7 541 1743.3 541 1692 541C1640.7 541 1589.3 541 1538.2 541C1487 541 1436 541 1384.8 541C1333.7 541 1282.3 541 1231 541C1179.7 541 1128.3 541 1077 541C1025.7 541 974.3 541 923 541C871.7 541 820.3 541 769 541C717.7 541 666.3 541 615.2 541C564 541 513 541 461.8 541C410.7 541 359.3 541 308 541C256.7 541 205.3 541 154 541C102.7 541 51.3 541 25.7 541L0 541Z"
                fill="#cf2e2e" stroke-linecap="round" stroke-linejoin="miter">
            </path>
        </svg>
    </div>

    <!-- Bootstrap JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!-- JQuery e JQuery Mask Plugins -->
    <script defer src="js/jquery.js"></script>
    <script defer src="js/jquery.mask.js"></script>

    <!-- Javascript Padrão -->
    <script defer src="js/default.js"></script>

    <!-- Javascript Externo da Página -->
    <script defer src="js/login.js"></script>

    <!-- Validação do Bootstrap -->
    <script defer>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>

    <!-- Pergunta de Segurança -->
    <script defer>
    const question_label = document.querySelector('#question_label');
    const question_entry = document.querySelector('#question_entry');
    const database_question = document.querySelector('#database_question');

    const questions = [{
            question: 'Qual o nome da sua mãe?',
            database_question: 'mother',
        },
        {
            question: 'Qual sua data de nascimento?',
            database_question: 'birth_date',
        },
        {
            question: "Qual o CEP da seu endereço?",
            database_question: 'cep',
        }
    ]

    const random_question = questions[Math.floor(Math.random() * questions.length)];

    question_label.innerHTML += `<em>${random_question.question}</em>`;
    database_question.setAttribute('value', random_question.database_question);

    if (random_question.database_question == 'birth_date') {
        question_entry.setAttribute('type', 'date');
    }
    </script>
</body>

</html>