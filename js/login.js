// Divs de cadastro e login
const login_div = document.querySelector( '#login_div' )
const cadastro_div = document.querySelector( '#cadastro_div' )

function ShowCad() {
    login_div.style.filter = 'blur(10px)'
    cadastro_div.style.filter = 'blur(0px)'
    cadastro_div.style.top = '0'
}

function HideCad() {
    login_div.style.filter = 'blur(0px)'
    cadastro_div.style.filter = 'blur(10px)'
    cadastro_div.style.top = '100%'
}

function ShowPassword( e ) {
    if ( e.type == 'text' ) {
        e.setAttribute( 'type', 'password' )
    } else {
        e.setAttribute( 'type', 'text' )
    }
}

function ConfirmPasswordVerification() {
    const new_password_entry = document.querySelector( '#new_password_entry' )
    const confirm_password_entry = document.querySelector( '#confirm_password_entry' )

    if ( confirm_password_entry.value == new_password_entry.value ) {
        confirm_password_entry.classList.add( 'is-valid' )
        confirm_password_entry.classList.remove( 'is-invalid' )
    } else {
        confirm_password_entry.classList.add( 'is-invalid' )
        confirm_password_entry.classList.remove( 'is-valid' )
    }
}