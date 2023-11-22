<?php
session_start();
include_once 'components/NavBar.php';
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
include_once 'components/NavBar.php';
include_once 'components/accessibilityMenu.php';
?>

    <main class="container-fluid w-100 p-0">

        <!-- Banner -->
        <div class="apr-container p-5 pt-0 w-100">
            <h1 class="apr-container-title">
                <!-- Titulo adicionado dentro de /js/main_page.js -->
            </h1>
            <h3>Com a Telecall, sua empresa está pronta para um futuro de crescimento e eficiência</h3>
            <a href="chat.php" data-bs-target="#fale-conosco"><span>Fale conosco</span></a>

            <img class="apr-wave p-0" src="assets/main_page/apr_wave.svg" alt="">
        </div>

        <!-- Serviços -->
        <div class="services pt-5">
            <div class="row text-center text-body-emphasis">
                <h1>Nossos Serviços</h1>
                <h3 class="opacity-75">Que tal conhecer um pouco sobre alguns de nossos serviços?</h3>
            </div>

            <div class="row justify-content-center p-3 mt-5 mb-5 gap-3">

                <!-- 2FA -->
                <div class="card card-hover bg-body d-flex flex-column justify-content-between col-lg-4 col-xxl-2 col-sm-12 p-3 rounded-5"
                    style="--bs-bg-opacity: .4;" data-bs-toggle="offcanvas" data-bs-target="#2fa-offcanvas">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>2FA</h3>
                        <img src="assets/icons/2fa.svg" width="70px" alt="">
                    </div>

                    <p class="fw-bold opacity-75">
                        Adicione uma camada extra de segurança para seus usuários com a autenticação de dois fatores
                    </p>
                    <div class="arrow"><img class="icons" src="assets/icons/arrow.svg" alt=""></div>
                </div>

                <!-- Numero Máscara -->
                <div class="card card-hover bg-body d-flex flex-column justify-content-between col-lg-4 col-xxl-2 col-sm-12 p-3 rounded-5"
                    style="--bs-bg-opacity: .4;" data-bs-toggle="offcanvas" data-bs-target="#nummask-offcanvas">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>Número Máscara</h3>
                        <img src="assets/icons/nummask.svg" width="70px" alt="">
                    </div>

                    <p class="fw-bold opacity-75">Com o número máscara, você pode ter um número de telefone virtual para
                        receber chamadas e SMS</p>
                    <div class="arrow"><img class="icons" src="assets/icons/arrow.svg" alt=""></div>
                </div>

                <!-- SMS Programado -->
                <div class="card card-hover bg-body d-flex flex-column justify-content-between col-lg-4 col-xxl-2 col-sm-12 p-3 rounded-5"
                    style="--bs-bg-opacity: .4;" data-bs-toggle="offcanvas" data-bs-target="#smsprog-offcanvas">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>SMS Programado</h3>
                        <img src="assets/icons/smsprog.svg" width="70px" alt="">
                    </div>

                    <p class="fw-bold opacity-75">
                        Envie SMS para seus clientes de forma programada, com o conteúdo que você desejar
                    </p>
                    <div class="arrow"><img class="icons" src="assets/icons/arrow.svg" alt=""></div>
                </div>

                <div class="card card-hover bg-body d-flex flex-column justify-content-between col-lg-4 col-xxl-2 col-sm-12 p-3 rounded-5"
                    style="--bs-bg-opacity: .4;" data-bs-toggle="offcanvas" data-bs-target="#verify-offcanvas">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>Google Verified Calls</h3>
                        <img src="assets/icons/verify.svg" width="70px" alt="">
                    </div>

                    <p class="fw-bold opacity-75">
                        Fornece aos usuários informações verificadas sobre chamadas de empresas, exibindo o nome, o
                        logotipo e o motivo da ligação
                    </p>
                    <div class="arrow"><img class="icons" src="assets/icons/arrow.svg" alt=""></div>
                </div>

            </div>
        </div>

        <!-- Por que Telecall -->
        <div class="row p-5 justify-content-between">
            <div class="col-md-6 col-sm-12 px-2">
                <div class="row">
                    <h2>Por que escolher a <span class="text-danger">Telecall</span>?</h2>
                </div>

                <hr class="border border-2 border-danger">

                <div class="row why-text">
                    <div class="card bg-body p-3 rounded-5" style="--bs-bg-opacity: .4;">
                        <p class=" fw-bold opacity-75">
                            Escolher o CPaaS da Telecall significa elevar suas comunicações a um novo patamar. Com nossa
                            plataforma avançada, você integra facilmente mensagens, chamadas e recursos de comunicação
                            em
                            tempo real em seus aplicativos. Conte com nossa confiabilidade, suporte de qualidade e
                            flexibilidade para atender às suas necessidades. Melhore a interação com clientes e otimize
                            processos com a Telecall</p>
                    </div>
                </div>

                <div class="row my-4">
                    <img class="col-7 mx-auto img-fluid" src="assets/main_page/por-que-telecall.png" alt="">
                </div>
            </div>

            <div class="col-md-5 col-sm-12 d-flex flex-column justify-content-between">
                <div class="row card bg-light-subtle mb-3">
                    <div class="card-header fw-bold">Confiabilidade</div>
                    <div class="card-body">
                        <p class="card-text">Garantimos um serviço confiável para que suas comunicações funcionem sem
                            interrupções</p>
                    </div>
                </div>

                <div class="row card bg-light-subtle mb-3">
                    <div class="card-header fw-bold">Suporte de Qualidade</div>
                    <div class="card-body">
                        <p class="card-text">Oferecemos suporte técnico de alta qualidade para atender às suas
                            necessidades e resolver quaisquer problemas</p>
                    </div>
                </div>

                <div class="row card bg-light-subtle mb-3">
                    <div class="card-header fw-bold">Confiabilidade</div>
                    <div class="card-body">
                        <p class="card-text">Garantimos um serviço confiável para que suas comunicações funcionem sem
                            interrupções</p>
                    </div>
                </div>

                <div class="row card bg-light-subtle mb-3">
                    <div class="card-header fw-bold">Suporte de Qualidade</div>
                    <div class="card-body">
                        <p class="card-text">Oferecemos suporte técnico de alta qualidade para atender às suas
                            necessidades e resolver quaisquer problemas</p>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- Offcanvas 2FA -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="2fa-offcanvas" aria-labelledby="2fa-offcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">2FA</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="offcanvas-img">
                    <img class="img-fluid" src="assets/main_page/2fa-offcanvas.png" alt="">
                </div>

                <p>
                    A 2FA opera com um princípio simples, mas altamente eficaz: requer que os usuários forneçam duas
                    formas
                    de autenticação antes de acessar um sistema ou uma conta. Isso normalmente envolve algo que o
                    usuário
                    sabe, como uma senha, combinado com algo que o usuário tem, como um código de autenticação
                    temporário
                    enviado por SMS ou gerado por um aplicativo.
                </p>
                <p>
                    A principal vantagem da 2FA é a proteção adicional que oferece. Mesmo que alguém descubra ou obtenha
                    a
                    senha de um usuário, não poderá acessar a conta sem a segunda forma de autenticação. Isso torna o
                    acesso
                    não autorizado substancialmente mais difícil, tornando os sistemas mais resilientes contra ameaças
                    cibernéticas.
                </p>
                <p>
                    Para as empresas, a implementação da 2FA não é apenas uma medida de segurança, mas também uma
                    demonstração de responsabilidade. Mostra que a empresa leva a segurança a sério e está comprometida
                    em
                    proteger as informações confidenciais de seus clientes. Isso, por sua vez, gera confiança e pode até
                    atrair clientes que valorizam a segurança de suas informações.
                </p>
            </div>
        </div>
    </div>

    <!-- Offcanvas Número Máscara -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="nummask-offcanvas" aria-labelledby="nummask-offcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Número Máscara</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="offcanvas-img my-5">
                    <img class="img-fluid" src="assets/main_page/nummask-offcanvas.png" alt="">
                </div>

                <p>
                    O "Número Máscara" permite que as empresas atribuam números de telefone temporários ou fictícios aos
                    seus representantes de atendimento ao cliente. Quando os clientes entram em contato, eles veem
                    apenas o
                    número de máscara em vez do número pessoal do atendente. Isso protege a privacidade dos funcionários
                    e
                    ajuda a evitar que números pessoais sejam divulgados ou usados indevidamente.
                </p>
                <p>
                    Além disso, o "Número Máscara" melhora a segurança das informações confidenciais. Se um cliente ou
                    funcionário precisa compartilhar informações delicadas, eles podem fazê-lo com confiança, sabendo
                    que a
                    privacidade está sendo mantida. A comunicação é mantida em um ambiente seguro e profissional.
                </p>
                <p>
                    A eficiência também é aprimorada, pois os atendentes podem se comunicar com os clientes sem
                    preocupações
                    sobre possíveis violações de privacidade. Isso resulta em uma melhor experiência de atendimento ao
                    cliente e em relacionamentos mais sólidos com os clientes.
                </p>
            </div>
        </div>
    </div>

    <!-- Offcanvas SMS Programado -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="smsprog-offcanvas" aria-labelledby="smsprog-offcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">SMS Programado</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="offcanvas-img my-5">
                    <img class="img-fluid" src="assets/main_page/smsprog-offcanvas.png" alt="">
                </div>

                <p>
                    Uma das vantagens mais evidentes do SMS programado é a capacidade de planejar com antecedência. As
                    empresas podem criar mensagens de texto personalizadas e definir datas e horários específicos para
                    sua
                    entrega. Isso é particularmente útil em campanhas de marketing, lembretes de compromissos e eventos,
                    ou
                    até mesmo para fornecer informações importantes de forma oportuna.
                </p>
                <p>
                    Além disso, o SMS programado simplifica o processo de comunicação com os clientes, economizando
                    tempo e
                    esforço. As mensagens podem ser preparadas com antecedência e programadas para serem enviadas
                    automaticamente, permitindo que as equipes se concentrem em outras tarefas importantes.
                </p>
                <p>
                    Para os destinatários, o SMS programado oferece conveniência. Eles recebem informações importantes
                    ou
                    ofertas especiais exatamente quando precisam, tornando a experiência do cliente mais satisfatória.
                    Isso
                    pode levar a um aumento na fidelização e na taxa de resposta.
                </p>
            </div>
        </div>
    </div>

    <!-- Offcanvas Google Verified Calls -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="verify-offcanvas" aria-labelledby="verify-offcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Google Verified Calls</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="offcanvas-img my-5">
                    <img class="img-fluid" src="assets/main_page/verify-offcanvas.png" alt="">
                </div>

                <p>
                    Ao integrar o Google Verified Calls em suas operações, as empresas podem agora garantir que suas
                    chamadas sejam facilmente identificadas como legítimas pelos clientes. Quando uma empresa utiliza
                    esse
                    serviço, o número de telefone aparece com um ícone de verificação e o nome da empresa, conferindo
                    credibilidade à chamada. Isso não apenas constrói a confiança do cliente, mas também aumenta as
                    taxas de
                    resposta, uma vez que os clientes se sentem mais confortáveis ao atender chamadas de números
                    autenticados.
                </p>
                <p>
                    Além disso, o Google Verified Calls ajuda a eliminar as preocupações dos clientes relacionadas a
                    golpes
                    telefônicos e chamadas de spam. Ao verem que estão recebendo uma chamada autenticada, os usuários
                    podem
                    atender com confiança, sabendo que estão protegidos contra possíveis fraudes. Isso cria um ambiente
                    mais
                    seguro para a comunicação, fortalecendo os laços entre empresas e clientes.
                </p>
                <p>
                    Outro benefício crucial é a transparência nas chamadas de vendas e de atendimento ao cliente. Os
                    clientes têm a oportunidade de saber a finalidade da ligação antes mesmo de atenderem. Isso não
                    apenas
                    economiza tempo, mas também melhora a experiência do cliente, oferecendo interações mais relevantes
                    e
                    personalizadas.
                </p>
            </div>
        </div>
    </div>


    <!-- JavaScript Bootstrap -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script defer src="js/jquery.js"></script>

    <!-- JQuery Mask -->
    <script defer src="js/jquery.mask.js"></script>

    <!-- Javascript Externo da Página -->
    <script defer src="js/main_page.js"></script>

    <!-- Utilitários -->
    <script defer src="js/default.js"></script>
    <script defer src="js/util/toast.js"></script>

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
</body>

</html>