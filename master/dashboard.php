<?php
session_start();

include_once('../backend/get-users.php');

$masterUser = $_SESSION['user'];
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

    <!-- CSS Padrão -->
    <link rel="stylesheet" href="../default.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php
    include_once('../components/NavBar.php');
    include_once('../components/accessibilityMenu.php');
    ?>

    <main class="container-fluid">
        <section class="row d-flex justify-content-center">

            <div class="container p-4">
                <h3 class='text-center'>Dashboard Master</h3>

                <p class='px-5'>Usuário Master:
                    <strong>
                        <?php echo $masterUser['fullname'] ?>
                    </strong>
                </p>
            </div>

            <div class="table-container col-md-11 col-sm-12 border border-2 border-dark-subtle rounded overflow-scroll">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome Completo</th>
                            <th scope="col">Data de Nasc.</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Login</th>
                            <th scope="col">Nome Materno</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        getAllUsers();
                        ?>
                    </tbody>
                </table>
            </div>

        </section>
    </main>

    <!-- Default JS -->
    <script src="/telecall/js/default.js"></script>

    <!-- JQuery -->
    <script defer src="/telecall/js/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>

</html>