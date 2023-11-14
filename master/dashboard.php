<?php
session_start();

// Verifica se o usuário é master
if (!isset($_SESSION['is_master']) || !$_SESSION['is_master']) {
    header('Location: /telecall/reglog.php');
    die();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Telecall</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- CSS Padrão -->
    <link rel="stylesheet" href="../default.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php
include_once '../components/NavBar.php';
include_once '../components/accessibilityMenu.php';
?>

    <main class="vh-100">

        <section class="row m-0 h-100">

            <aside class="col-md-2 col-sm-12 p-1 shadow overflow-x-hidden">
                <div class="row">

                    <div class="col-5 col-md-12 col-sm-5 mx-auto p-0">
                        <button class="btn btn-danger w-100">Usuários</button>
                    </div>

                    <div class="col-5 col-md-12 col-sm-5 mx-auto p-0">
                        <button class="btn w-100">Mensagens</button>
                    </div>

                    <div class="col-5 col-md-12 col-sm-5 mx-auto p-0">
                        <button class="btn w-100">Log</button>
                    </div>

                    <div class="col-5 col-md-12 col-sm-5 mx-auto p-0">
                        <button class="btn w-100">DER</button>
                    </div>

                </div>
            </aside>

            <div class="col-md-10 col-sm-12">

                <!-- Container da Tabela de Usuários -->
                <div class="row mt-3 d-flex flex-column align-items-center" id="users_container">

                    <!-- Modal de Confirmação de Exclusão de Usuário -->
                    <div class="modal fade" id="delete_user_confirmation_modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">ATENÇÃO</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4 class="text-center text-danger">ESSA AÇÃO É IRREVERSÍVEL!</h4>
                                    <hr class="border">
                                    <h4>Tem certeza que deseja deletar este usuário?</h4>
                                    <div id="modal_user_id"></div>
                                    <div id="modal_user_fullname"></div>
                                    <div id="modal_user_login"></div>
                                </div>
                                <div class=" modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-danger" id="delete_user_btn">CONFIRMAR</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="row mx-auto p-0">
                            <div class="col-md-6 col-sm-6 p-0">
                                <form class="input-group mb-3" id="search_user_form">
                                    <input type="text" class="form-control" placeholder="Pesquisa" name="search">
                                    <button class="btn btn-outline-secondary" type="button" id="search_btn"><i
                                            class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="row overflow-x-scroll p-0 mx-auto" style="height: 75dvh;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Login</th>
                                        <th scope="col">Data de Nascimento</th>
                                        <th scope="col">CPF</th>
                                        <th scope="col">Nome Materno</th>
                                        <th scope="col">Gênero</th>
                                        <th scope="col">Celular</th>
                                        <th scope="col">Tel. Fixo</th>
                                        <th scope="col">CEP</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Cidade</th>
                                        <th scope="col">Endereço</th>
                                        <th scope="col">Num.</th>
                                        <th scope="col">Complemento</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_users">
                                    <!-- Javascript -->
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>>

            </div>

        </section>

    </main>

    <!-- Bootstrap JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script defer src="../js/jquery.js"></script>

    <!-- Utilitários -->
    <script defer src="../js/default.js"></script>
    <script defer src="../js/util/toast.js"></script>

    <!-- Scripts da Página -->
    <script defer src="../js/dashboard/users.js"></script>


</body>

</html>