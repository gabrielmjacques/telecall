// Elementos
const messages_table_tbody = $("#messages_container table tbody");

// Função para inserir chats na tabela
function InsertChats(messages) {
    messages_table_tbody.html("");

    messages.forEach(message => {
        const formatted_date = new Date(message.datatime).toLocaleString().slice(0, -3);
        const formatted_message = message.message.length > 20 ? message.message.slice(0, 20) + "..." : message.message;

        $(messages_table_tbody).append(`
            <tr>
                <td>${message.id}</td>
                <td>${formatted_message}</td>
                <td>${message.fullname}</td>
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