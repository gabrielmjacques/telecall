// Divs de cadastro e login
const login_div = $( "#login_div" );
const cadastro_div = $( "#cadastro_div" );

// Mostrar cadastro
function ShowCad() {
    login_div.css( "opacity", "0" );
    login_div.css( "scale", "0.9" );

    cadastro_div.css( "top", "0" );
    cadastro_div.css( "scale", "1" );
}

// Esconder cadastro
function HideCad() {
    login_div.css( "opacity", "1" );
    login_div.css( "scale", "1" );

    cadastro_div.css( "top", "100%" );
    cadastro_div.css( "scale", "0.9" );
}

// Mostrar/esseconder senha
function ShowPassword( e ) {
    if ( e.type == "text" ) {
        e.setAttribute( "type", "password" );
    } else {
        e.setAttribute( "type", "text" );
    }
}

// Verificação do campo de confirmação de senha
function ConfirmPasswordValidation() {
    const new_password_entry = $( "#new_password_entry" );
    const confirm_password_entry = $( "#confirm_password_entry" );

    if ( confirm_password_entry.val() != new_password_entry.val() ) {
        confirm_password_entry[ 0 ].setCustomValidity( true );
    } else {
        confirm_password_entry[ 0 ].setCustomValidity( "" );
    }
}

// Validação de data de nascimento
function DateValidation() {
    const date = new Date;

    const date_entry = document.querySelector( "#birth_date_entry" );
    const date_entry_year = Number( date_entry.value.slice( 0, 4 ) );

    if ( date_entry_year > date.getFullYear() - 18 ) {
        date_entry.setCustomValidity( "true" );
    } else {
        date_entry.setCustomValidity( "" );
    }
}

// Máscaras
$( "#cpf_entry" ).mask( "000.000.000-00" );
$( "#cel_entry" ).mask( "+55 (00) 00000-0000" );
$( "#tel_fixo_entry" ).mask( "+55 (00) 0000-0000" );
$( "#cep_entry" ).mask( "00000-000" );