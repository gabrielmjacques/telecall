// Divs de cadastro e login
const login_div = $("#login_div");
const cadastro_div = $("#cadastro_div");

// Inputs de cadastro
const cpf = $("#cpf_entry");
const cep_entry = $("#cep_entry");
const state_entry = $("#state_entry");
const city_entry = $("#city_entry");
const address_entry = $("#address_entry");

// Feedbacks de cadastro
const cep_feedback = $("#cep_feedback");
cep_feedback.css("display", "none");

/**
 * Função para recuperar o endereço pelo CEP usando a API do ViaCEP e preencher os campos de endereço
 */
async function InsertAddress() {
    if (cep_entry.val().length == 9) {
        cep_entry[0].setCustomValidity("");

        const cep = cep_entry.val().replace("-", "");

        const address = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        const address_json = await address.json();

        // Se o CEP não for encontrado
        if (address_json.erro) {
            cep_feedback.css("display", "flex");

            AddressInputsReadOnly(false);

            AddCities();

        } else {
            cep_feedback.css("display", "none");

            AddressInputsReadOnly(true);

            state_entry.val(address_json.uf);
            AddCities(address_json.uf)
                .then(() => {
                    city_entry.val(address_json.localidade);
                    address_entry.val(`${address_json.bairro}, ${address_json.logradouro}`);
                });
        }

    } else {
        cep_entry[0].setCustomValidity(true);
        cep_feedback.css("display", "none");

        AddressInputsReadOnly(true);
    }
}

// Adicionando as cidades do estado selecionado com API
async function AddCities() {
    const state = state_entry.val();

    city_entry.empty(); // Limpa as cidades
    city_entry.append("<option value='' selected disabled>Carregando...</option>"); // Adiciona uma opção de carregamento enquanto as cidades são carregadas

    const res = await fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${state}/municipios`);
    const cities = await res.json();
    city_entry.empty();

    cities.forEach(city => {
        const option = document.createElement("option");
        option.value = city.nome;
        option.innerHTML = city.nome;

        city_entry.append(option);
    });
}

/**
 * Função para deixar os inputs de endereço somente leitura
 * 
 * @param {boolean} bool - Se os inputs devem ser somente leitura ou não
 */
function AddressInputsReadOnly(bool) {
    if (bool) {
        state_entry.addClass("readonly");
        city_entry.addClass("readonly");
        address_entry.attr("readonly", "true");
    } else {
        state_entry.removeClass("readonly");
        city_entry.removeClass("readonly");
        address_entry.removeAttr("readonly");
    }
}

// Mostrar cadastro
function ShowCad() {
    login_div.css("opacity", "0");
    login_div.css("scale", "0.9");

    cadastro_div.css("top", "0");
    cadastro_div.css("scale", "1");
}

// Esconder cadastro
function HideCad() {
    login_div.css("opacity", "1");
    login_div.css("scale", "1");

    cadastro_div.css("top", "100%");
    cadastro_div.css("scale", "0.9");
}

// Mostrar/esseconder senha
function ShowPassword(e) {
    if (e.type == "text") {
        e.setAttribute("type", "password");
    } else {
        e.setAttribute("type", "text");
    }
}

// Verificação do campo de confirmação de senha
function ConfirmPasswordValidation() {
    const new_password_entry = $("#new_password_entry");
    const confirm_password_entry = $("#confirm_password_entry");

    if (confirm_password_entry.val() != new_password_entry.val()) {
        confirm_password_entry[0].setCustomValidity(true);
    } else {
        confirm_password_entry[0].setCustomValidity("");
    }
}

// Validação de data de nascimento
function DateValidation() {
    const date = new Date;

    const date_entry = document.querySelector("#birth_date_entry");
    const date_entry_year = Number(date_entry.value.slice(0, 4));

    if (date_entry_year > date.getFullYear() - 18 || date_entry_year < date.getFullYear() - 110) {
        date_entry.setCustomValidity("true");
    } else {
        date_entry.setCustomValidity("");
    }
}

/**
 * Validação de CPF
 */
function ValidateCPF() {
    const cpf_digits = cpf.val();

    if (VerifyCPF(cpf_digits)) {
        cpf[0].setCustomValidity("");
    } else {
        cpf[0].setCustomValidity("true");
    }
}

/**
 * Função para verificar se o CPF é válido
 * 
 * @param {string} cpf - CPF a ser verificado
 */
function VerifyCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf == '') return false;
    // Elimina CPFs invalidos conhecidos	
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999")
        return false;
    // Valida 1o digito	
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    // Valida 2o digito	
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    return true;
}

// Inserindo estados no select
for (let i = 0; i < states_abbrs.length; i++) {
    const option = document.createElement("option");
    option.value = states_abbrs[i];
    option.innerHTML = states_abbrs[i];

    state_entry.append(option);
}

// Máscaras
$("#cpf_entry").mask("000.000.000-00");
$("#cel_entry").mask("+55 (00) 00000-0000");
$("#tel_fixo_entry").mask("+55 (00) 0000-0000");
$("#cep_entry").mask("00000-000");