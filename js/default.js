$( document ).ready( () => {
    if ( localStorage.getItem( "theme" ) == "dark" ) {
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
} )

function ChangeTheme() {
    if ( localStorage.getItem( "theme" ) == "dark" ) {
        localStorage.setItem( "theme", "light" )
    } else {
        localStorage.setItem( "theme", "dark" )
    }

    window.location.reload()
}