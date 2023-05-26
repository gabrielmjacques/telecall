login_div = document.getElementById( 'login_div' )
cadastro_div = document.getElementById( 'cadastro_div' )

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