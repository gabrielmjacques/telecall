// Divs de cadastro e login
const login_div = $( "#login_div" )
const cadastro_div = $( "#cadastro_div" )

// Mostrar cadastro
function ShowCad() {
    login_div.css( "filter", "blur(10px)" )
    cadastro_div.css( "filter", "blur(0px)" )
    cadastro_div.css( "top", "0" )
}

// Esconder cadastro
function HideCad() {
    login_div.css( "filter", "blur(0px)" )
    cadastro_div.css( "filter", "blur(10px)" )
    cadastro_div.css( "top", "100%" )
}

// Mostrar/esseconder senha
function ShowPassword( e ) {
    if ( e.type == "text" ) {
        e.setAttribute( "type", "password" )
    } else {
        e.setAttribute( "type", "text" )
    }
}

// Verificação do campo de confirmação de senha
function ConfirmPasswordValidation() {
    const new_password_entry = $( "#new_password_entry" )
    const confirm_password_entry = $( "#confirm_password_entry" )

    if ( confirm_password_entry.val() != new_password_entry.val() ) {
        confirm_password_entry[ 0 ].setCustomValidity( true )
    } else {
        confirm_password_entry[ 0 ].setCustomValidity( "" )
    }
}

// Validação de data de nascimento
function DateValidation() {
    const date = new Date

    const date_entry = document.querySelector( "#date_entry" )
    const date_entry_year = Number( date_entry.value.slice( 0, 4 ) )

    if ( date_entry_year > date.getFullYear() - 18 ) {
        date_entry.setCustomValidity( "true" )
    } else {
        date_entry.setCustomValidity( "" )
    }
}

function Login() {
    const login_entry = $( "#login_entry" )
    const password_entry = $( "#password_entry" )

    const obj_user = JSON.parse( localStorage.getItem( "user_cad" ) )

    if ( login_entry.val() == obj_user.new_login && password_entry.val() == obj_user.new_password ) {
        login_entry[ 0 ].setCustomValidity( "" )
        password_entry[ 0 ].setCustomValidity( "" )
        localStorage.setItem( "isAuth", true )
        window.location.href = "index.html"
    } else {
        login_entry[ 0 ].setCustomValidity( "true" )
        password_entry[ 0 ].setCustomValidity( "true" )
    }
}

function Cadastro() {
    const name_entry = $( "#name_entry" ).val()
    const mom_name_entry = $( "#mom_name_entry" ).val()
    const new_login_entry = $( "#new_login_entry" ).val()
    const new_password_entry = $( "#new_password_entry" ).val()
    const cpf_entry = $( "#cpf_entry" ).val()
    const date_entry = $( "#date_entry" ).val()
    const cel_entry = $( "#cel_entry" ).val()
    const tel_entry = $( "#tel_entry" ).val()
    const email_entry = $( "#email_entry" ).val()

    const obj_user = {
        "name": name_entry,
        "mom_name": mom_name_entry,
        "new_login": new_login_entry,
        "new_password": new_password_entry,
        "cpf": cpf_entry,
        "date": date_entry,
        "cel": cel_entry,
        "tel": tel_entry,
        "email": email_entry
    }

    localStorage.setItem( "user_cad", JSON.stringify( obj_user ) )
}

// Máscaras
$( "#cpf_entry" ).mask( "000.000.000-00" );
$( "#cel_entry" ).mask( "+55 (00) 00000-0000" );
$( "#tel_entry" ).mask( "+55 (00) 0000-0000" );