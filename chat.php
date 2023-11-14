<?php
session_start();

$user_id = $_SESSION['user']['id'];

if (!$_SESSION['is_logged']) {
    header('Location: reglog.php');
    exit();

} else {
    if (!$_SESSION['is_master'] && $user_id != $_GET['id']) {
        header("Location: ?id=$user_id");
        exit();
    }
}
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

        <div id="screen">

        </div>

        <div class="" id="inputs">
            <form class="input-group mb-3 h-100" id="send_message_form">
                <input type="text" class="form-control" name="message" id="message_entry"
                    placeholder="Digite sua mensagem!" autocomplete="off">
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