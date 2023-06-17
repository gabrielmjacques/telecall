function LoadData() {
    const create_account_btn = $( "#create-account-btn" )
    const profile_dropdown = $( "#profile-dropdown" )
    const profile_login = $( "#profile-login" )
    const profile_name = $( "#profile-name" )
    const modal_username = $( "#modal-username" )

    const obj_user = JSON.parse( localStorage.getItem( "user_cad" ) )

    profile_dropdown.css( "display", "block" )
    create_account_btn.css( "display", "none" )
    profile_login.text( obj_user.new_login )
    profile_name.text( obj_user.name )
    modal_username.val( obj_user.name )
}

function LoadStyle() {
    const theme = localStorage.getItem( "theme" )
    const font_size = localStorage.getItem( "font_size" )

    if ( theme == "dark" ) {
        $( "html" ).attr( "data-bs-theme", "dark" )
        $( "#theme_switch" ).attr( "checked", true )
        $( ".apr-wave" ).attr( "src", "assets/main_page/apr_wave_dark.svg" )
        $( ".icons" ).css( "filter", "invert(100%)" )
    } else {
        $( "html" ).attr( "data-bs-theme", "light" )
        $( "#theme_switch" ).attr( "checked", false )
        $( ".apr-wave" ).attr( "width", "assets/main_page/apr_wave.svg" )
        $( ".icons" ).css( "filter", "invert(0%)" )
    }

    if ( font_size ) {
        $( "body" ).get( 0 ).style.setProperty( "--h-size", font_size + "em" )
        $( "body" ).get( 0 ).style.setProperty( "--p-size", font_size - 0.4 + "em" )
        $( "body" ).get( 0 ).style.setProperty( "--feedback-size", font_size - 0.6 + "em" )
    }
}

function Logoff() {
    localStorage.setItem( "isAuth", false )
    window.location.reload()
}

function ChangeTheme() {
    if ( localStorage.getItem( "theme" ) == "dark" ) {
        localStorage.setItem( "theme", "light" )
    } else {
        localStorage.setItem( "theme", "dark" )
    }

    window.location.reload()
}

function ChangeFontSize( val ) {
    localStorage.setItem( "font_size", val )

    window.location.reload()
}

$( document ).ready( () => {
    const isAuth = localStorage.getItem( "isAuth" )

    if ( isAuth == "true" ) LoadData()
    LoadStyle()
} )