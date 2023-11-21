const change_container_btns = $("#change_container_btns button");

// Função para trocar de container
function ChangeContainer(container_id) {
    const containers = ["#messages_container", "#users_container", "#logs_container", "#der_container"];

    containers.forEach(container => {
        if (container != container_id) {
            $(container).addClass("d-none");
        } else {
            $(container).removeClass("d-none");
        }
    });

    $(change_container_btns).removeClass("btn-danger");

    containers.forEach(container => {
        if (container == container_id) {
            $(`${container_id}_btn`).addClass("btn-danger");
        }
    });
};