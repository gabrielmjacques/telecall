// Elementos
const forgot_password_form = $('#forgot_password_form');

// Validação do bootstrap
(() => {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            event.preventDefault();

            if (!form.checkValidity()) {
                event.stopPropagation();

            } else {
                Submit(event);
            }

            form.classList.add('was-validated');
        }, false);
    });
})();

function Submit(e) {
    fetch('backend/endpoints/change_password.php', {
        method: 'POST',
        body: new FormData(forgot_password_form[0])
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = 'reglog.php?msg=Senha alterada com sucesso!';

            } else {
                ShowToast("Os dados não conferem!");
            }
        });
}

// Mostrar/esseconder senha
function ShowPassword(e) {
    if (e.type == "text") {
        e.setAttribute("type", "password");
    } else {
        e.setAttribute("type", "text");
    }
}

// Máscaras
$("#cpf_entry").mask("000.000.000-00");