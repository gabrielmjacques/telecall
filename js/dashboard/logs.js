// Elementos
const logs_table_tbody = $("#logs_container table tbody");

// Função para inserir chats na tabela
function InsertLogs(logs) {
    logs_table_tbody.html("");

    logs.forEach(log => {
        const formatted_date = new Date(log.datatime).toLocaleString().slice(0, -3);

        $(logs_table_tbody).append(`
            <tr>
                <td>${log.id}</td>
                <td>${log.user_id}</td>
                <td>${log.fullname}</td>
                <td>${log.log_description}</td>
                <td>${formatted_date}</td>
            </tr>
        `);
    });
}

// Função para pegar todos os chats
function GetAllLogs() {
    fetch("../backend/endpoints/logs/get_all.php")
        .then(response => response.json())
        .then(data => {
            InsertLogs(data);
        });
}
GetAllLogs();

function ChangeLogsOrder() {
    const order = $("#logs_order").val();

    fetch(`../backend/endpoints/logs/get_all.php?order=${order}`)
        .then(response => response.json())
        .then(data => {
            InsertLogs(data);
        });
}