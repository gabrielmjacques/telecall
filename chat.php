<?php
include 'backend/utilitaries.php';

session_start();

if (!isset($_SESSION['is_logged']) || !$_SESSION['is_logged'] || !isset($_SESSION['user'])) {
    header('Location: reglog.php?msg=Entre para acessar o chat!');
    exit();
}

$user_id = $_SESSION['user']['id'];

if (!isset($_GET['id'])) {
    header("Location: ?id=$user_id");
    exit();

} else if ($_GET['id'] != $user_id && !$_SESSION['is_master']) {
    header("Location: ?id=$user_id&msg=Você não pode acessar o chat de outra pessoa!");
    exit();
}

$user_chat = GetUserById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS Padrão -->
    <link rel="stylesheet" href="default.css">

    <!-- CSS da página -->
    <link rel="stylesheet" href="styles/chat.css">
</head>

<body>
    <?php
include_once 'components/NavBar.php';
include_once 'components/accessibilityMenu.php';
?>

    <main class="col-12 d-flex flex-column justify-content-between">

        <?php if (isset($_SESSION["is_master"]) && $_SESSION["is_master"]): ?>

        <div class="col-12 bg-body-tertiary py-1 pt-2 shadow rounded-bottom position-fixed z-1">
            <h4 class="text-center text-body"><?php echo $user_chat["fullname"] ?></h4>
        </div>

        <?php endif;?>

        <div id="screen">
            <!-- Container de mensagens -->
        </div>

        <div id="inputs">
            <form class="input-group h-100" id="send_message_form">
                <input type="text" class="form-control" name="message" id="message_entry"
                    placeholder="Digite sua mensagem" autocomplete="off">
                <button class="btn btn-danger" type="button" id="button-addon2">Enviar</button>

                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            </form>
        </div>

    </main>

    <!-- JavaScript Bootstrap -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script defer src="js/jquery.js"></script>


    <!-- Utilitários -->
    <script defer src="js/default.js"></script>
    <script defer src="js/util/toast.js"></script>

    <script defer src="js/chat.js"></script>
</body>

</html>