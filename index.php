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
        echo "<p class='warning'>" . $_GET['msg'] . "</p>";
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
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Rede e Infraestrutura
                            </button>
                            <ul class="dropdown-menu dropdown-menu-sm-end">
                                <li><a class="dropdown-item"
                                        href="https://telecall.com/ponto-a-ponto/">Ponto-a-Ponto</a></li>
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
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Outros Serviços
                            </button>
                            <ul class="dropdown-menu dropdown-menu-sm-end">
                                <li><a class="dropdown-item"
                                        href="https://telecall.com/outsourcing-de-hardware/">Outsourcing de Hardware</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item" id="profile-dropdown">

                        <div class="dropdown">
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span id="profile-login"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-sm-end">
                                <li>
                                    <a class="dropdown-item" onclick="Logoff()">Desconectar</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-fluid">

        <!-- Modal de Acessibilidade -->
        <button class="accessibility-menu" data-bs-toggle="modal" data-bs-target="#accessbilityModal">
            <img src="assets/icons/accessibility.png" alt="">
        </button>

        <div class="modal fade" id="accessbilityModal" tabindex="-1" aria-labelledby="accessbilityModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Menu de Acessibilidade</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column gap-4">

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="theme_switch"
                                onclick="ChangeTheme()">
                            <label class="form-check-label" for="theme_switch">Modo
                                Escuro</label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tamanho da Fonte</label> <br>
                            <button class="btn btn-primary" onclick="ChangeFontSize(1.4)">Normal</button>
                            <button class="btn btn-primary" onclick="ChangeFontSize(1.6)">Grande</button>
                            <button class="btn btn-primary" onclick="ChangeFontSize(1.8)">Extra Grande</button>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

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
                    <a href="reglog.php" id="create-account-btn"><button class="btn btn-danger">Fazer
                            Login</button></a>

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

        <!-- Seção Sobre o CPaaS-->
        <section class="row about-cpaas">
            <div class="col-md-10 col-sm-12 mx-auto">
                <div class="row">
                    <h1 class="section-title">Você sabe o que é CPaaS?</h1>
                </div>

                <div class="row d-flex justify-content-center gap-5">
                    <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="row">
                            <h4>
                                <strong class="text-danger">CPaaS</strong> (Comunicação como Serviço) é uma solução
                                de
                                software que permite aos
                                desenvolvedores
                                integrar diferentes tipos de comunicação, como voz, chamadas de vídeo e mensagens de
                                texto
                                SMS, em seus aplicativos. Através de APIs que se conectam à plataforma CPaaS, as
                                empresas
                                podem expandir suas ofertas sem a necessidade de investir em hardware ou software
                                adicional.
                            </h4>

                            <button type="button" class="btn btn-danger mx-auto" data-bs-toggle="modal"
                                data-bs-target="#contactModal">
                                Entre em contato agora com a nossa equipe
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center">
                        <img src="assets/main_page/about.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção com cards das soluções -->
        <section class="row solutions-cards">
            <div class="col-md-10 col-sm-12 mx-auto">
                <div class="row">
                    <h1 class="section-title">Nossas Soluções</h1>
                </div>

                <div class="row d-flex justify-content-center p-2 gap-4">
                    <div class="card solu-card">
                        <img src="assets/icons/2fa.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2FA</h5>
                            <p class="card-text">procedimento de segurança que garante que serão
                                necessários 2 fatores únicos para liberação de uma ação</p>
                        </div>
                    </div>

                    <div class="card solu-card">
                        <img src="assets/icons/nummask.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Número Máscara</h5>
                            <p class="card-text">Garanta aos seus clientes a capacidade de fazer chamadas e enviar
                                mensagens sem expor seus números de telefone pessoais</p>
                        </div>
                    </div>

                    <div class="card solu-card">
                        <img src="assets/icons/verify.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Google Verified Calls</h5>
                            <p class="card-text">Recurso que permite que empresas exibam
                                para o cliente na hora da chamada sua marca,
                                logotipo e até mesmo o motivo da chamada</p>
                        </div>
                    </div>

                    <div class="card solu-card">
                        <img src="assets/icons/smsprog.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SMS Programável</h5>
                            <p class="card-text">A ferramenta permite o envio de mensagens de SMS de forma segura,
                                rápida e confiável, proporcionando as informações necessárias ao seu cliente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção com cards das usos -->
        <section class="row uses">
            <div class="col-md-10 col-sm-12 mx-auto">
                <div class="row">
                    <h1 class="section-title">Amplamente utilizado em</h1>
                </div>

                <div class="row d-flex justify-content-center p-2 gap-4">

                    <div class="col p-4 text-center shadow rounded border border-top-0 border-bottom-0 use">
                        <h5 class="fw-bold border-bottom border-danger">Logística</h5>
                        <p>
                            Acesso seguro com 2FA.
                            Uso de números mascarados
                            para proteção de funcionário
                            e cliente.
                            Mantenha o cliente
                            informado sobre entrega e
                            serviços.
                            Verified calling para
                            confirmação de entregas.


                        </p>
                    </div>

                    <div class="col p-4 text-center shadow rounded border border-top-0 border-bottom-0 use">
                        <h5 class="fw-bold border-bottom border-danger">Varejo</h5>
                        <p>
                            Compra segura com 2FA.
                            Avisos sobre compras e
                            entregas.
                            Upsell com novas ofertas e
                            vantagens via SMS ou
                            Verified Calling.

                        </p>
                    </div>

                    <div class="col p-4 text-center shadow rounded border border-top-0 border-bottom-0 use">
                        <h5 class="fw-bold border-bottom border-danger">Call Center</h5>
                        <p>
                            Melhore taxas de abertura
                            utilizando alertas SMS para
                            confirmações.
                            Economia de números com o
                            uso de um único número
                            máscara por todos os agentes.
                            Verified Calling para
                            confirmação de
                            agendamentos.
                        </p>
                    </div>

                    <div class="col p-4 text-center shadow rounded border border-top-0 border-bottom-0 use">
                        <h5 class="fw-bold border-bottom border-danger">Saúde</h5>
                        <p>
                            Acesso seguro com 2FA.
                            Melhore o agendamento e
                            reduza faltas com lembretes por
                            SMS.
                            Tokens de autorização para
                            procedimentos com 2FA.
                            Verified Calling para avisos de
                            resultados e agendamentos.

                        </p>
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