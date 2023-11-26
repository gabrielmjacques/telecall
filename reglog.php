<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta - CPaaS</title>

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

    <main class="container mx-auto">

        <div class="row">

            <div class="col-12 p-0 border mt-4 mx-auto position-relative overflow-hidden rounded-5"
                style="max-width: 800px; box-shadow: 0 0 50px #00000049;">

                <!-- Tela de Login -->
                <div class="p-5 bg-body rounded-5" id="login_div" style="transition: opacity 1s, scale 1s;">
                    <div class="row mb-3 mt-3">
                        <h3 class="text-center fw-bold">Entrar</h3>
                        <hr>
                    </div>

                    <!-- Modal de 2FA -->
                    <div id="tfa_modal" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <form id="2fa_form" class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">2 Fator de Autenticação</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4 id="2fa_question">Pergunta de Segurança:</h4>

                                    <div class=" form-group mb-3">
                                        <input class="form-control" type="text" name="2fa_answer" id="2fa_answer_entry"
                                            required>

                                        <input type="hidden" id="2fa_column_entry" name="2fa_column">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>

                                    <button class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Login -->
                    <form class="needs-validation" id="login_form" novalidate>
                        <div class=" form-group mb-3">
                            <label for="login_entry">Login de Usuário</label>

                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" disabled>
                                    <img class="icons" src="assets/icons/user.png" alt="" width="15px">
                                </button>

                                <input class="form-control" type="text" name="login" id="login_entry" required>
                            </div>
                        </div>

                        <!-- Senha -->
                        <div class="form-group mb-5">
                            <label for="password_entry">Senha</label>

                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" disabled>
                                    <img class="icons" src="assets/icons/password.png" alt="" width="15px">
                                </button>

                                <input class="form-control" type="password" name="password" id="password_entry"
                                    required>

                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="ShowPassword(document.getElementById('password_entry'))">
                                    <img class="icons" src="assets/icons/show.png" alt="" width="15px">
                                </button>
                                <div class="invalid-feedback">Preencha os campos</div>
                            </div>


                            <div class="mt-3">
                                <a href="forgot_password.php" class="btn btn-sm"><small>Esqueci minha senha</small></a>
                            </div>

                        </div>

                        <!-- Botão Entrar -->
                        <div class="form-group mb-3">
                            <button href="index.html" id="login_form_submit" class="btn w-100 btn-outline-danger">
                                Entrar na Conta
                            </button>
                        </div>
                    </form>

                    <div class="row">
                        <!-- Mostrar aba de cadastro -->
                        <div class="col-6">
                            <button type="button" class="show_cad_btn btn btn-sm w-100" onclick="ShowCad()">Não tenho
                                conta, quero me cadastrar!</button>
                        </div>

                        <div class="col-6">
                            <button type="reset" class="btn btn-sm w-100" onclick='ResetForm()'>Limpar</button>
                        </div>
                    </div>
                </div>



                <!-- Tela de Cadastro -->
                <div class="container-cad bg-body h-100 shadow-lg rounded-5" id="cadastro_div">
                    <div class="p-5 position-relative">

                        <div class="close-button">
                            <button class="hide_cad_btn btn" onclick="HideCad()">X</button>
                        </div>

                        <div class="row mb-3 mt-3">
                            <h3 class="text-center fw-bold">Cadastrar</h3>
                            <hr>
                        </div>

                        <!-- Cadastro -->
                        <form class="needs-validation" id="cadastro_form" novalidate method="post"
                            action="backend/processar_registro.php">

                            <!-- Nome e Nascimento -->
                            <div class="row mb-3">
                                <div class="col-md-8 form-group mb-3">
                                    <label for="fullname_entry">Nome Completo</label>
                                    <input class="form-control" type="text" name="fullname" id="fullname_entry"
                                        placeholder="Insira seu nome completo"
                                        pattern="^(?!.*\s$)(?!^\s)[A-Za-zÀ-ÿ\s]{15,80}$" required>

                                    <div class="invalid-feedback">Campo de nome deve ter de 15 a 80 caracteres</div>
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="birth_date_entry">Data de Nascimento</label>
                                    <input class="form-control" type="date" name="birth_date" id="birth_date_entry"
                                        max="9999-12-12" onkeyup="DateValidation()" required>

                                    <div class="invalid-feedback">Selecione uma data válida <small>
                                            (Você deve ser maior de
                                            idade para se cadastrar)
                                        </small></div>
                                </div>
                            </div>

                            <!-- Nome Materno -->
                            <div class="row mb-4">
                                <div class="col form-group">
                                    <label for="mother_entry">Nome Materno</label>
                                    <input class="form-control" type="text" name="mother" id="mother_entry"
                                        placeholder="Insira o nome completo de sua mãe"
                                        pattern="^(?!.*\s$)(?!^\s)[A-Za-zÀ-ÿ\s]{15,80}$" required>

                                    <div class="invalid-feedback">Campo de nome deve ter de 15 a 80 caracteres</div>
                                </div>
                            </div>

                            <!-- CPF e Gênero -->
                            <div class="row mb-4">
                                <div class="col-md-4 form-group mb-3">
                                    <label for="cpf_entry">CPF</label>
                                    <input class="form-control" type="text" name="cpf" id="cpf_entry"
                                        placeholder="Ex. 000.000.000-00" pattern="^.{14}$" onkeyup="ValidateCPF()"
                                        required>

                                    <div class="invalid-feedback">CPF inválido</div>
                                </div>

                                <div class="col-md-8">
                                    <label for="gender">Gênero</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Outro">Outro</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Celular e Telefone fixo -->
                            <div class="row mb-4">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="cel_entry">Celular</label>
                                    <input class="form-control" type="text" name="cel" id="cel_entry"
                                        placeholder="Ex: +55 (21) 93030-1010" pattern="^.{19}$" required>

                                    <div class="invalid-feedback">Celular inválido</div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="tel_fixo_entry">Telefone Fixo</label>
                                    <input class="form-control" type="text" name="tel_fixo" id="tel_fixo_entry"
                                        placeholder="Ex: +55 (21) 3030-1010" pattern="^.{18}$" required>

                                    <div class="invalid-feedback">Telefone inválido</div>
                                </div>
                            </div>

                            <!-- CEP e Estado -->

                            <!-- Aviso caso o CEP não seja encontrado -->
                            <div class="row text-danger text-center" id="cep_feedback">
                                <label>CEP não encontrado! Por favor insira seu endereço manualmente</label>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 col-sm-12 form-group mb-3">
                                    <label for="cep_entry">CEP</label>
                                    <input class="form-control" type="text" name="cep" id="cep_entry"
                                        placeholder="00000-000" required onkeyup="InsertAddress()">

                                    <div class="invalid-feedback">CEP inválido</div>
                                </div>

                                <div class="col-md-6 col-sm-12 form-group mb-3">
                                    <label for="state_entry">Estado</label>
                                    <select class="form-select readonly" name="state" id="state_entry"
                                        onchange="AddCities()">
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col form-group mb-3">
                                    <label for="city_entry">Cidade</label>
                                    <select class="form-select readonly" name="city" id="city_entry">
                                    </select>
                                </div>
                            </div>

                            <!-- Logradouro e Número -->
                            <div class="row mb-4">

                                <div class="col-md-6 col-sm-12 form-group mb-3">
                                    <label for="address_entry">Logradouro</label>
                                    <input class="form-control" type="text" name="address" id="address_entry"
                                        pattern="^(?!.*\s$)(?!^\s)[A-Za-zÀ-ÿ\s,.]{10,50}$" placeholder="Barro X, Rua Y"
                                        readonly required>

                                    <div class="invalid-feedback">Logradouro inválido</div>
                                </div>

                                <div class="col-md-6 col-sm-12 form-group mb-3">
                                    <label for="number_entry">Número</label>
                                    <input class="form-control" type="number" min=1 max=10000 name="number"
                                        id="number_entry" required>

                                    <div class="invalid-feedback">Número inválido</div>
                                </div>

                            </div>

                            <!-- Complemento -->
                            <div class="row mb-4">
                                <div class="col form-group">
                                    <label for="complement_entry">Complemento</label>
                                    <input class="form-control" type="text" name="complement"
                                        pattern="^(?!.*\s$)(?!^\s)[A-Za-zÀ-ÿ\s,.]{0,50}$" id="complement_entry"
                                        placeholder="Ex: Casa | Apartamento">
                                </div>
                            </div>

                            <!-- Novo login -->
                            <div class="row">
                                <div class="col form-group mb-3">
                                    <label for="new_login_entry">Login</label>
                                    <input class="form-control" type="text" name="new_login" id="new_login_entry"
                                        placeholder="Crie seu login aqui" pattern="^[a-zA-Z]{6}$" maxlength="6"
                                        required>

                                    <div class="invalid-feedback">
                                        Deve conter exatamente 6 caracteres alfabéticos <br>
                                    </div>
                                </div>
                            </div>

                            <!-- Senha e Confirmar senha -->
                            <div class="row">

                                <div class="col-md-6 form-group mb-3">
                                    <label for="new_password_entry">Senha</label>

                                    <div class="input-group">
                                        <input class="form-control" type="password" name="new_password"
                                            id="new_password_entry" placeholder="Crie sua senha"
                                            pattern="^[a-zA-Z]{8,}$" required onkeyup="ConfirmPasswordValidation()">

                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="ShowPassword(document.getElementById('new_password_entry'))">
                                            <img class="icons" src="assets/icons/show.png" alt="" width="15px">
                                        </button>

                                        <div class="invalid-feedback">
                                            A senha deve conter no mínimo 8 caracteres alfabéticos
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="confirm_password_entry">Confirmar Senha</label>

                                    <div class="input-group">
                                        <input class="form-control" type="password" name="confirm_password"
                                            id="confirm_password_entry" placeholder="Confirme sua senha" required
                                            onkeyup="ConfirmPasswordValidation()">

                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="ShowPassword(document.getElementById('confirm_password_entry'))">
                                            <img class="icons" src="assets/icons/show.png" alt="" width="15px">
                                        </button>

                                        <div class="invalid-feedback">Deve coincidir com a senha</div>
                                    </div>
                                </div>

                            </div>

                            <!-- Criar Conta -->
                            <div class="form-group mb-3">
                                <button type="submit" class="btn w-100 btn-outline-danger">Criar
                                    Conta</button>
                            </div>
                        </form>

                        <div class="row">
                            <!-- Mostrar aba de cadastro -->
                            <div class="col-6">
                                <button type="button" class="show_cad_btn btn btn-sm w-100" onclick="HideCad()">Já tenho
                                    conta, quero
                                    fazer login!</button>
                            </div>

                            <div class="col-6">
                                <button type="reset" class="btn btn-sm w-100" onclick='ResetForm()'>Limpar</button>
                            </div>
                        </div>

                    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!-- JQuery e JQuery Mask Plugins -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mask.js"></script>

    <!-- Utilitários -->
    <script src="js/default.js"></script>
    <script src="js/util/locals.js"></script>
    <script src="js/util/toast.js"></script>

    <!-- Javascript Externo da Página -->
    <script src="js/login.js"></script>

</body>

</html>