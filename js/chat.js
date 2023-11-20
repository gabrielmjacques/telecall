// Elementos
const screen_container = $("#screen");
const send_message_form = $("#send_message_form");

// Função para inserir as mensagens na tela
function InsertMessages(messages) {
    screen_container.html("");

    messages.forEach(message => {
        const time = message.datatime.split(" ")[1].slice(0, 5);
        let author = message.is_master_msg == 1 ? "Telecall" : "";

        screen_container.append(`
        <div class="message-container ${author == 'Telecall' ? 'telecall' : 'me'}">
            <div class="message-header">
                ${author == "Telecall" ? '<img src="assets/favicon.png" />' : ""}
                <p>${author}</p>
            </div>

            <div class="message-body">
                <p>${message.message}</p>

                <p class="time">${time}</p>
            </div>
        </div>
        `);
    });
}

// Função para pegar todas as mensagens do banco de dados
function GetAllMessages() {
    const id = new URLSearchParams(window.location.search).get("id");

    fetch("backend/endpoints/chat/get_all_messages.php?id=" + id)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                InsertMessages(data.messages);
            }
        })
        .finally(() => {
            const n = $(document).height();
            screen_container.animate({ scrollTop: n }, 50);
        });
}
GetAllMessages();

// Função para enviar mensagem
send_message_form.on("submit", e => {
    e.preventDefault();

    fetch("backend/endpoints/chat/send_message.php", {
        method: "POST",
        body: new FormData(e.target)
    })
        .then(response => response.json())
        .then(() => {
            ShowToast("Mensagem enviada com sucesso!");
            GetAllMessages();
            e.target.reset();
        });
});