// Elementos
const messages_table_tbody = $("#messages_container table tbody");
const change_container_btns = $("#change_container_btns button");

// Função para inserir chats na tabela
function InsertChats(messages) {
    messages.forEach(message => {
        const formatted_date = new Date(message.datatime).toLocaleString().slice(0, -3);
        const formatted_message = message.message.length > 30 ? message.message.slice(0, 30) + "..." : message.message;

        $(messages_table_tbody).append(`
            <tr>
                <td>${message.id}</td>
                <td>${message.fullname}</td>
                <td>${formatted_message}</td>
                <td>${formatted_date}</td>
                <td>
                    <a href="../chat.php?id=${message.user_id}" class="btn">Ver</a>
                </td>
            </tr>
        `);
    });
}

// Função para pegar todos os chats
function GetAllChats() {
    fetch("../backend/endpoints/chat/get_all_chats.php")
        .then(response => response.json())
        .then(data => {
            InsertChats(data);
        });
}
GetAllChats();

// Função para trocar de container
function ChangeContainer(container_id) {
    const containers = ["#messages_container", "#users_container", "#products_container", "#categories_container"];
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