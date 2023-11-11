/*
Requisitos:
1. Bootstrap
2. JQuery

Como usar:
1. Incluir o arquivo toast.js no html (antes do arquivo que o chama)
Ex:
    <script defer src="js/login.js"></script> - dentro dele ocorre a chamada da função ShowToast
    <script defer src="js/toast.js"></script>

2. Chamar a função ShowToast(message) passando a mensagem como parâmetro
2.1 ShowToast("Mensagem a ser exibida");
*/

/**
 * Função para mostrar um toast na tela. Abra o arquivo para ver os requisitos e como usar
 * 
 * @param {string} message Mensagem a ser exibida no toast
 */
function ShowToast(message) {
    let toast_margin = {
        x: 3,
        y: 5
    };

    if ($(window).width() < 576) {
        toast_margin.x = 0;
        toast_margin.y = 3;
    }

    if ($("#toast").length == 0) {
        $('body').append(`
            <div id="toast" class="toast align-items-center bg-body border-0 mx-${toast_margin.x} my-${toast_margin.y} position-fixed bottom-0 end-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body fw-bold">
                    </div>
                    
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        `);
    }

    $("#toast .toast-body").html(message);

    var toast = new bootstrap.Toast(document.getElementById("toast"));
    toast.show();
}