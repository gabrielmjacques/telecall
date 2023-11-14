// Elementos
const users_container = $('#users_container');
const tbody_users = $('#tbody_users');
const search_user_form = $('#search_user_form');
const delete_user_modal = new bootstrap.Modal('#delete_user_confirmation_modal');

// Função para inserir os usuários na tabela
function InsertUsers(users) {
    tbody_users.html('');

    if (users.length > 0) {
        users.forEach(user => {
            // Formtação da data (dd/mm/aaaa)
            const formatted_date = user.birth_date.split('-').reverse().join('/');

            tbody_users.append(`
                <tr>
                    <td>${user.id}</td>
                    <td>${user.fullname}</td>
                    <td>${user.login}</td>
                    <td>${formatted_date}</td>
                    <td>${user.cpf}</td>
                    <td>${user.mother}</td>
                    <td>${user.gender}</td>
                    <td>${user.cel}</td>
                    <td>${user.tel_fixo}</td>
                    <td>${user.cep}</td>
                    <td>${user.uf}</td>
                    <td>${user.city}</td>
                    <td>${user.address}</td>
                    <td>${user.house_number}</td>
                    <td>${user.complement}</td>
                    <td>
                        <button class="btn btn-danger" onclick="OpenDeleteModal(${user.id}, '${user.fullname}', '${user.login}')"><i class="bi bi-trash3"></i></button>
                    </td>
                </tr>
            `);
        });

    } else {
        ShowToast('Nenhum usuário corresponde a pesquisa!');
        tbody_users.append(`
            <tr>
                <td colspan="16" class="text-center opacity-75">
                    <h2>...</h2>
                </td>
            </tr>
        `);

    }
}

// Função para abrir o modal de confirmação de exclusão
function OpenDeleteModal(id, fullname, login) {
    delete_user_modal.show();

    // Inserindo o nome do usuário no modal
    $("#delete_user_confirmation_modal .modal-body #modal_user_id").html(`<strong>ID:</strong> ${id}`);
    $("#delete_user_confirmation_modal .modal-body #modal_user_fullname").html(`<strong>Nome:</strong> ${fullname}`);
    $("#delete_user_confirmation_modal .modal-body #modal_user_login").html(`<strong>Login:</strong> ${login}`);
    $("#delete_user_btn").on('click', () => DeleteUserById(id));
}

// Função para deletar um usuário pelo seu id
function DeleteUserById(id) {
    fetch('../backend/endpoints/users/delete_by_id.php?id=' + id)
        .then(response => response.json())
        .then(response => {
            if (response.success) {
                ShowToast('Usuário deletado com sucesso!');
                GetAllUsers();

            } else {
                ShowToast('Erro ao deletar usuário!');
            }
        })
        .finally(() => delete_user_modal.hide());
}

// Função para pegar todos os usuários
function GetAllUsers() {
    fetch('../backend/endpoints/users/get_all.php')
        .then(response => response.json())
        .then(users => {
            InsertUsers(users);
        });
}
GetAllUsers();

// Função para pesquisar um usuário
search_user_form.on('submit', e => {
    e.preventDefault();

    fetch('../backend/endpoints/users/get_like_search.php?search=' + e.target[0].value)
        .then(response => response.json())
        .then(users => InsertUsers(users));
});