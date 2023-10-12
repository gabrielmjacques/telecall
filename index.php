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
    include_once('components/warningCard.php');
    include_once('components/NavBar.php');
    include_once('components/accessibilityMenu.php'); 
    ?>

    <main class="container-fluid">


        

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